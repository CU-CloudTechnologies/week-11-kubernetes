Kubernetes to spin up docker containers
1.	Install Kubectl and Minikube on Virtuaal machine
2.	Run Minikube on VM.
3.	For deploying the database service run the following command
	kubectl create -f mysql-deployment.yaml
	Give the cluster 2-5 minutes to deploy
	You’ll see the following output for a successful deployment:
	persistentvolumeclaim "database" created
	deployment "mysql" created
	service "mysql" created
	Check to see if the MySQL pod is up with:
	kubectl describe pods mysql
	if you want to destroy the deployment use the following command:
	kubectl delete -f mysql-deployment.yaml
4.	For deploying the web service run the following command
	kubectl create -f wordpress-deployment.yaml
	wait for 2-5 minutes for deployment
	if you want to destroy the deployment use the following command:
	kubectl delete -f wordpress-deployment.yaml
5.	Go to http://127.0.0.1:8080/index.html  to see the database values



