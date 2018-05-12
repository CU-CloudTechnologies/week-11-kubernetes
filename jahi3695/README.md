# Kubernetes Two-Tier Web Application

## Running Locally


Start minikube
```
minikube start
```
Verify:
```
minikube status
```
Allow Kubernetes to use local Docker images
```
eval $(minikube docker-env)
``` 
Build the Docker image
```
docker build -t nginx_webserver .
```
Create Kubernetes Deployments and Services
```
kubectl create -f nginx_webserver.yaml
kubectl create -f mysql_db.yaml
```

## Access Your Application
Make sure the deployments are healthy
```
kubectl get pods
```
Find the service URL
```
minikube service list
```
Access the service in your browser at:
```
http://<URL>/app.php
```
## Shutting Down Cleanly
Use these commands to remove the services and deployments you set up and quit minikube
```
kubernetes delete -f nginx_webserver.yaml
kubernetes delete -f mysql_db.yaml
minikube stop
```

