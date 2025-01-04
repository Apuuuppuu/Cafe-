# Use the official Nginx image
FROM nginx:latest

# Copy website content to Nginx's default public directory
COPY . /usr/share/nginx/html

# Copy custom Nginx config (optional)
#COPY nginx.conf /etc/nginx/nginx.conf

# Expose port 80
EXPOSE 80
