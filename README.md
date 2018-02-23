# Doctrine 2 ORM

## Documentation
[Doctrine](http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/index.html)

## Project overview
- Frontend controller: public/index.php
- Application entities: src/App/Demo/Entity
- Application repositories: src/App/Demo/Repository

## Text file enconding
- UTF-8

## Code style formatter
- PSR-2

## Install dependencies
Run `composer install`

## Launch project
Run `composer serve`

## Project seed
Run `git checkout master`

## Final project
Run `git checkout final-project`

## Doctrine console

### Command Overview
Run `vendor/bin/doctrine list`

### Entity creation
Run `vendor/bin/doctrine orm:convert-mapping --namespace="App\Demo\Entity\\" --force  --from-database annotation ./src/`
- `--force` to overwrite existing entities

### Setter/Getter generation
- On specific entity, run `vendor/bin/doctrine orm:generate-entities --filter=App\Demo\Entity\TCompteurs ./src/`
- For all entities, run `vendor/bin/doctrine orm:generate-entities ./src/`
