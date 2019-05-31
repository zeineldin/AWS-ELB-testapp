#!/bin/bash
sudo  yum -y update
sudo amazon-linux-extras install -y  epel
sudo yum install -y stress

for i in $(seq 1 10)
do 
cat /dev/zero > /dev/null &
stress --cpu 2 --timeout 86400 &
done

