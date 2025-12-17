## IC marketing website

Converted from Vite to Laravel


## Requirements
[![PHP](https://img.shields.io/badge/PHP-%3E%3D8.4-8892BF?logo=php&logoColor=white)](https://www.php.net/) [![Node](https://img.shields.io/badge/Node-%3E%3D22.x-43853D?logo=node.js&logoColor=white)](https://nodejs.org/) [![PostgreSQL](https://img.shields.io/badge/Postgres-%3E%3D17.x-336791?logo=postgresql&logoColor=white)](https://www.postgresql.org/) [![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)
- PHP >= v8.4.1
- PostgreSQL >= v17.x
- Node >= v22.x

## Setup

Install PHP and Node dependencies:

```bash
composer install
npm install
```

## Run

Start the development environment:

```bash
composer run dev
```

## Usage & examples

- Start full local development environment (recommended):

```bash
composer run dev
```

This runs Laravel's server, the queue worker, background pail process, and Vite concurrently (see `composer.json` scripts).

- Run Vite directly (frontend only):

```bash
npm run dev
```

- Build production assets:

```bash
npm run build
```

- Helpful composer scripts:

```bash
composer run setup   # install deps, create .env, migrate, and build assets
composer run test    # run the test suite
```

## Testing

Run the automated test suite:

```bash
composer run test
```

## License

This project is licensed under the MIT License — see the `LICENSE` file for details.