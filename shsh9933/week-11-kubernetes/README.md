# Developing a PHP and MYSQL application using Kubernetes

## File Structure

The file structure needs to be as follows:

```bash
.
+-- phpapp.yaml
+-- mysqlapp.yaml
+-- Dockerfile
+-- php
    +-- cloudtech.php
```


Cloudtech.php is the PHP script that accesses the SQL database and retrieves the value.

## How to run it:

The yaml file to create the php frontend uses a custom image. We would need to build the imahe first.
In order to build the image locally on minikube, run the following commands:
```bash
eval $(minikube docker-env)

docker build -t myimage .
```
To create the two pods, run the below commands:

```bash
kubectl create -f phpapp.yaml
kubectl create -f mysqlapp.yaml
```
## How to test:

We can either try to access the IP for minikube cluster or go inside the phpapp container and do a curl on localhost/cloudtech.php.
To get inside a container, run the below command.
```bash
kubectl exec -it <podname> -- /bin/bash
```

