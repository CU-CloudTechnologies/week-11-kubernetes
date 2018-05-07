Use following commands to run the pods:

kubectl create -f web-dep.yaml
kubectl create -f sql-dep.yaml

Do a curl for cloudtech.php

Clean up:

kubectl delete -f web-dep.yaml
kubectl delete -f sql-dep.yaml
