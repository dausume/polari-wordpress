FROM wordpress:latest

# Install telnet
RUN apt-get update && \
    apt-get install -y telnet && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Install MariaDB client
RUN apt-get update && \
    apt-get install -y mariadb-client && \
    rm -rf /var/lib/apt/lists/*