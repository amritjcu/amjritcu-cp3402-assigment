# Supplementary-CP3402 WordPress Child Theme Project

This repository contains a WordPress child theme project using the Astra theme. The project includes a Docker setup to easily run and deploy the WordPress environment.

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Running the Project](#running-the-project)
- [Deployment](#deployment)
- [Project Structure](#project-structure)
- [Contributing](#contributing)
- [License](#license)

## Prerequisites

Before you begin, ensure you have the following installed on your machine:

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Installation

1. Clone the repository:

   ```sh
   git clone https://github.com/Amjritcu/supplementary-CP3402.git
   cd supplementary-CP3402
   ```

2. Ensure Docker and Docker Compose are installed and running on your machine.

## Running the Project

1. Start the Docker containers:

   ```sh
   docker-compose up -d
   ```

   This command will start the WordPress and MySQL containers in detached mode.

2. Access the WordPress site:

   Open your web browser and go to `http://localhost:8080`. You should see the WordPress installation screen.

3. Complete the WordPress installation:

   Follow the on-screen instructions to complete the WordPress installation. Use the following database details:

   - Database Host: `db`
   - Database Name: `wordpress`
   - Database User: `wordpress`
   - Database Password: `wordpress`

4. Activate the Astra theme:

   - Log in to the WordPress admin dashboard.
   - Go to `Appearance > Themes`.
   - Activate the `Astra` theme.
   - Activate the `Astra Child` theme if you want to use the child theme.

## Deployment

To deploy the project, you can use the same Docker Compose setup on your server. Ensure Docker and Docker Compose are installed on your server, then follow the installation and running instructions above.

## Project Structure

The project structure is as follows:

```
supplementary-CP3402/
├── themes/
│   ├── astra/
│   └── astra-child/
├── docker-compose.yml
└── README.md
```

- `themes/`: Contains the Astra theme and its child theme.
- `docker-compose.yml`: Docker Compose configuration file.
- `README.md`: This file.

## Contributing

Contributions are welcome! Please open an issue or submit a pull request.
