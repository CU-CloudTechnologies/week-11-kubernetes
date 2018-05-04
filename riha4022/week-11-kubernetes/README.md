# Using Kubernetes to deploy a Nginx webserver communicating with a MongoDB Database engine using PHP
## Learning a basic 2-tier architecture of a webserver using a private db server to display results

### Description:

1. Automates the creation of a two tier topology consisting of a webserver and a database server in the backend.
2. Replicating wwebserver containers using ReplicationController and inter-pod communication. 


### Pre-requisites
1. Git Clone the repository into your local machine. 
```
git clone https://github.com/rishabhhastu/week-11-compose-files
```

2. Change the directory to riha4022
```
cd week-9-compose-files/riha4022/
```

3. Install Minikube in your system. The below commands are for Linux OS. You can find the respective commands for your own flavor of OS
```
curl -Lo minikube https://storage.googleapis.com/minikube/releases/v0.25.2/minikube-linux-amd64 && chmod +x minikube
&& sudo mv minikube /usr/local/bin/

curl -LO https://storage.googleapis.com/kubernetes-release/release/$(curl -s
https://storage.googleapis.com/kubernetes-release/release/stable.txt)/bin/linux/amd64/kubectl
```

4. Start Minikube and verify the same 
```
minikube start
minikube version
minikube status
```

##### Instructions:

1. Run the below command for Kubernetes to locally build the images
```
eval $(minikube docker-env)
```

2. Build the docker image for the webserver locally

```
docker build -t nginx-mongodb .
```

3. Start the Frontend and Backend Pods along with their services

```
kubernetes create -f node.yaml
kubernetes create -f mongo.yaml
```

##### Verification of the deployed pods

1. Run the following commands:

```
kubectl get pods
kubectl describe pods

Kubectl get svc
kubectl describe svc
```

2. Run the command `minikube cluster-info` and check for the IP address (URL) of the master 

3. To check for the message from the database container, run the command `curl http://<URL>:30001/coudtech_insert.php `

