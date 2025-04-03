# USAGE

```bash
git clone https://github.com/johntrigg/vuln-site.git
cd vuln-site/

# Build the image, using the dockerfile in the current directory
docker build -t vuln-site .

# Check if the image exists
docker image list

# Check to see that the container is/was running
docker ps -a 

# Kill it if already built and need fresh image
docker rm -f {{ID of container}}

# Build the container vuln-site-container, using the newly made vuln-site image. Map host port 8080 to container port 80
docker run -d -p 8080:80 --name vuln-site-container vuln-site

# Check to see that the image is running
docker ps -a 
```

All in one
```bash
docker stop vuln-site-container
docker rm vuln-site-container

git clone https://github.com/johntrigg/vuln-site.git
cd vuln-site/

docker build -t vuln-site .
docker run -d -p 8080:80 --name vuln-site-container vuln-site
```