# week-11-kubernetes
This repository is for my copy of the week 11 Kubernetes assignment.  It uses Kubernetes to create a LAMP setup with a PHP web page that pulls from the MySQL database.

## Instructions
Be sure to have Kubernetes and Minikube setup and running.  Then, run the following commands to deploy the web server and MySQL services.

```
kubectl create -f web.yaml
kubectl create -f db.yaml
```

