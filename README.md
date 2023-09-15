# PHP with Docker

Earlier versions of Mac had PHP preinstalled. Currently, one of the best ways to use PHP is through Docker. Docker is an application that lets you create a development environment in a specific container.

## Prerequisites

- Install Docker https://docs.docker.com/desktop/install/mac-install/
- `docker-compose build`
- `docker-compose up`
- Navigate to http://localhost:8000/

From here on out, you can start and stop your docker instance from the Docker application.

## PHP vs. JavaScript

| Description | Node.js | PHP |
| ----------- | ------- | --- |
| Pacakge manager | npm | composer |
| Routing | Express | Laravel |
| Variables | let a = 1; | $a = 1; |
| Strings | let b = 'hello'; | $b = 'hello';
| Template literal | `${a}` | "$a" |


## Connecting to the Database

In Postico, create a new shortcut. Use the following:

Nickname: Docker Snowfall
Host: localhost
Port: 5433
User: postgres
Password: secret

