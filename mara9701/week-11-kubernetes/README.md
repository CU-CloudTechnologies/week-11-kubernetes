Week11 Kubernetes Assignment
Using Kubernetes to deploy webserver and sql database using docker containers

Git Instructions:

- Fork this repo into your own Github
- Clone from your repo to your local machine
  git clone https://github.com/<your-github-id>/week-11-kubernetes
  
Kubernetes Instructions:

 1. Install Kubectl and Minikube
 2. Deploy database service: kubectl create -f mysql-deploy.yaml
 3. Deploy web service: kubectl create -f phpapp-deploy.yaml
 4. Ensure it was deployed successfully using the command: kubectl get deployment
 5. Go to http://127.0.0.1:8080/index.php  to verify
 6. To destroy the deployment use the following commands:
	kubectl delete -f mysql-deploy.yml
	kubectl delete -f phpapp-deploy.yml