# Setup reproducer
```bash
git clone git@github.com:michaelKaefer/ea-reproducer.git
cd ea-reproducer
git checkout [DESIRED BRANCH]
composer update
symfony console doctrine:database:create
symfony console doctrine:schema:update --force
symfony server:start -d
```

# Create new reproducer
```bash
git checkout main
composer update
git add .
git commit -m 'Updates' .
git checkout -b my-new-branch
# If a PR is reproduced: change composer.json to use the PR branch of EA (scroll down for an example)
# Change DATABASE_URL in .env 
symfony console doctrine:database:create
symfony console doctrine:schema:update --force
symfony server:start -d
```

Now open `.../admin` in your browser.

`composer.json` example:
```json
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/michaelKaefer/EasyAdminBundle.git"
        }
    ],
    "require": {
        "easycorp/easyadmin-bundle": "feature/typed-properties-dev",
    }
```