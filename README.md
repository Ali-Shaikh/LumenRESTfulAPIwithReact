# Lumos - Lumen x React

Lumen RESTful API with React Front-end

## Getting Started

* Install Docker
* Clone Repo
* `cd` to the backend folder rename `.env.example` to `.env`
* Open terminal `cd` to Project root
* run `docker-compose up`
* Wait for docker to download images and start the services, first time it will take a while; get a cuppa
* Open another terminal (don't close the first one), cd to `backend` folder run `docker exec -it lumos-fpm composer install`
* To run migration and seed the DB run `docker exec -it lumos-fpm php artisan migrate`

* Access React App `localhost:4001`
* Access Lumen App `http://localhost:4002/api/v1/`

* Use Postman to import `Lumen x React.postman_collection.json` and test the API


These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

```
Give examples
```

### Installing

A step by step series of examples that tell you how to get a development env running

Say what the step will be

```
Give the example
```

And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Ali Shaikh** - *Initial work* - [Ali-Shaikh](https://github.com/ali-shaikh)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc