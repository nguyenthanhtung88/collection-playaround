# collection-playaround
Play some amazing things with Laravel Collection

## Environment Setup

- Install and setup [Docker](https://www.docker.com/) following [this instruction](https://gist.github.com/wataridori/5eed8c76cd6120b609d30d21f0785d45) for your local machine.
- **Restart your machine**
- `cd` to project folder.
- Create `.docker` folder inside project root folder and make it writeable.
- Make `storage/` and `bootstrap/cache/` folder writeable.
- Run command:
```
docker-compose up -d
// Run the following command to check docker status
docker ps
```
- SSH into `collection_workspace` container:
```
docker exec -it collection_workspace /bin/bash
```
    - Run `composer install` (for `vendor` directory).
    - Run `yarn` (for `node_modules` directory).
    - Run `npm run dev` (for compiling asset files).
- Check project working at:

```
http://localhost:1111/
```

**Note**
- When working with asset files (js, css, ...), please run this command in `collection_workspace` container:
```
npm run watch
```
