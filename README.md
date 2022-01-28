# Run
Create a new branch and change DATABASE_URL in .env to your likes, then run:

```bash
composer install
symfony console doctrine:database:create
symfony console doctrine:schema:update --force
symfony server:start -d
```

Now open `.../admin` in your browser.