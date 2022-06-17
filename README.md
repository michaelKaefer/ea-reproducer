# Run reproducer
```bash
git clone git@github.com:michaelKaefer/ea-reproducer.git
git checkout feature/add-new-button-in-association-field
composer install
symfony console doctrine:database:create
symfony server:start -d
```

# Create new reproducer
```bash
git checkout main
composer update
git add .
git commit -m 'Updates' .
git checkout -b my-new-branch
# Change DATABASE_URL in .env to your likes
symfony console doctrine:database:create
symfony console doctrine:schema:update --force
symfony server:start -d
```

Now open `.../admin` in your browser.git checkout -b feature/add-new-button-in-association-field
