Kubernetes Homework

This prodspec can be used to build a LAMP bundle in a Kubernetes cluster in Minikube.
There is an Apache Frontend with a Mysql backend. Accessing cloudtech.php page will retrieve a value from the Database.

How to run? 
Run Minikube in a VM.

1. Kubernetes will mount the volumes from the Minikube VM which is its host. Hence we need the www and db directories in the Minikube VM. To do this:
	1. Minikube ssh
	2. Copy these folders in '/mnt/data' and '/mnt/db'
2. Create web service by running: 'kubectl create -f web.yaml'
3. Create mysql service by running: 'kubectl create -f mysql.yaml'

This will create both services and deployments with pods.

How to test?
1. kubectl get pods
2. kubectl exec <web pod> -- curl localhost
3. kubectl exec <web pod> -- curl localhost/cloudtech.php

