# AWS-ELB-testapp

1. Create New EC2 using AWS Linux 2 AMI 

- to make sure that you are using the right AMI 

```$ cat /etc/system-release```

2. Install Apache 

```$ sudo yum update -y ```

```$ sudo yum install -y httpd ```

```$ sudo amazon-linux-extras install -y php7.2 ```

# Start the Apache web server

```$ sudo systemctl start httpd```

#You can verify that httpd is on by running the following command:
```$ sudo systemctl enable httpd ```
```$ exit ``` 

- login again and run 

```$ sudo service httpd start ```

```$ sudo chkconfig httpd on ```

```$ sudo usermod -a -G apache ec2-user ```

- then edit the file  /etc/httpd/conf/httpd.conf

-  add index.php in the following location "DirectoryIndex index.php index.html"

- copy the index.php in the Document roor location 

```$  p index.php /var/www/html/ ```

# refrence : https://docs.aws.amazon.com/AWSEC2/latest/UserGuide/ec2-lamp-amazon-linux-2.html
