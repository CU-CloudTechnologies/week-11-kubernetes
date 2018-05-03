# Two tier web application deployed using kubernetes
A webserver is deployed using nginx and a backend database using MySQL. This is deployed on a local machine. Docker is image is built and used in a podspec to deploy two webservers behind a load-balancer.

## Pre-requisites
Below components are installed:
1. Hypervisor (VirtualBox)
2. kubectl
3. minikube
4. kubeadm

Follow guide at (Kubernetes Docs)[https://kubernetes.io/docs/tasks/tools/install-kubectl/]

Start minikube
```
minikube start
```
Verify using `minikube status`

## Instructions
1. Run below command for Kubernetes to use locally built images
```
eval $(minikube docker-env)
``` 
2. Build the Docker image locally for the webserver
```
docker build -t nginx-php .
```
3. Start kubernetes cluster
```
kubernetes create -f deploy-secrets.yaml
kubernetes create -f deploy-db.yaml
kubernetes create -f deploy-web.yaml
```

## Verify the deployment
1. Run `kubectl get pods` and verify the status of pods for mysql and nginx

2. Run `minikube service list` and get the URL for the webserver
Also, `minikube service load-balancer --url` to get the URL

3. `curl http://<URL>/ibuiltthis.php`

## Description
### deploy-secrets.yaml
This stores the credentials used by the frontend service to connect to the backend database. 

### deploy-db.yaml
This is used to deploy a MySQL database with a persistent storage using persistentVolumeClaim. The database is initialized using a the script `./data/files/mydb.sql`

### deploy-web.yaml
This deploys a cluster of two webservers behind a load balancer. This webservers are initialized with the php files which connect to the backend database

## Clean-up
Run below commands to bring down the cluster
```
kubernetes delete-f deploy-db.yaml
kubernetes delete-f deploy-web.yaml
kubernetes delete-f deploy-secrets.yaml
```


