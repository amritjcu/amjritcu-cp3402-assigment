# **Project Report**

## **Project Overview**

This project involved creating a custom WordPress child theme as part of my CP3402 assignment. The site was developed and deployed using modern web technologies and tools.

## **Key Responsibilities**

1. **Child Theme Development**:

   - Set up a WordPress environment using Docker and Docker Compose.
   - Customized WordPress themes using a child theme to meet project requirements.

2. **Containerization**:

   - Created Docker containers for the project, ensuring environment isolation and reproducibility.
   - Configured persistent Docker volumes to store and manage WordPress and database files.

3. **Automation**:

   - Designed and implemented a GitHub Actions workflow for Continuous Deployment (CD).
   - Automated deployment to an Ubuntu server with SSH integration.

4. **Server Management**:

   - Configured the Ubuntu server to host the WordPress site securely.
   - Set up SSH keys and permissions to enable secure, passwordless deployment.

5. **Version Control**:

   - Used GitHub to manage source control, track changes, and collaborate.
   - Set up branch protection rules to maintain code integrity.

---

## **Technologies and Tools Used**

### **Development Tools**

- **WordPress**: Content Management System used to build the website.
- **PHP**: Programming language for extending and customizing WordPress.
- **MySQL**: Relational database management system for storing website data.
- **Docker**: Used to create isolated containers for WordPress and MySQL.
- **Docker Compose**: Simplified multi-container Docker application setup.

### **Deployment Tools**

- **GitHub Actions**: Automates Continuous Deployment (CD) to the production server.
- **SSH**: Securely connects the GitHub Actions pipeline to the Ubuntu server.
- **Ubuntu Server**: Hosting environment for the WordPress deployment.

---

## **Skills Developed**

1. **WordPress Customization**:
   - Modified WordPress themes to meet specific design requirements.
   - Integrated plugins to enhance functionality.
2. **Containerization**:
   - Configured Docker to isolate the WordPress and database environments.
   - Used Docker volumes to persist website data.
3. **Continuous Deployment**:
   - Built an automated pipeline to deploy changes directly from GitHub to the production server.
   - Learned how to configure SSH and manage keys securely.
4. **Version Control**:
   - Leveraged GitHub for source control and collaborative development.

---

## **Deployment Process**

### **Step 1: Configure the Server**

1. Installed Docker and Docker Compose on the Ubuntu server.
2. Created a Docker Compose file to define the WordPress and MySQL services.
3. Set up SSH keys for secure server access.

### **Step 2: Set Up the GitHub Repository**

1. Uploaded the project files to a private GitHub repository.
2. Added a `.github/workflows/deploy.yml` file to define the deployment pipeline.

### **Step 3: Configure GitHub Actions**

1. Set the following secrets in the repository:
   - `SERVER_HOST`: The IP address of the server.
   - `SERVER_USER`: The username for SSH.
   - `SERVER_SSH_KEY`: The private key for authentication.
2. Created a workflow to:
   - SSH into the server.
   - Pull the latest changes from the `master` branch.
   - Restart the Docker containers to apply updates.

### **Step 4: Test the Pipeline**

1. Committed changes to the repository and verified that the GitHub Actions workflow deployed the updates automatically.
2. Tested the website to ensure functionality remained intact after each deployment.

---

## **Project Impact**

By completing this project, I demonstrated my ability to:

- Deploy a scalable web application using containerization.
- Implement Continuous Deployment to streamline updates.
- Work with WordPress to build and customize websites.

---

## **Personal Reflection**

This project showcased my expertise in web development, containerization, and automated deployment. The skills I developed are highly transferable to real-world software development and DevOps roles, making me a strong candidate for positions requiring experience with modern development practices.

Feel free to explore the repository or contact me to discuss this project further.
