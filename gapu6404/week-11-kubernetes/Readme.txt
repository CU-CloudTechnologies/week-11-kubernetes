This is an assignment of deploying Wordpress and MySQL using minikube.

Deploy MySQL and Wordpress using following command:

kubectl create -f mysql-deployment.yaml
kubectl create -f wordpress-deployment.yaml

Check the service is running and the IP using following command:

kubectl get services kubectl


