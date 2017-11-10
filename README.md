
# Qordoba Connector Magento 2 Extension
 
## Development

Developing Magento Extension with docker under Mac OSX / Windows is a huge pain, since sharing your code into containers will slow down the code-execution about 60 times (depends on the solution). 
Testing and working with a lot of the alternatives made us pick the best of those for each platform, and combine this in one single tool: [docker-sync](http://docker-sync.io/)

### Requirements

   - [Docker Community Edition (CE)](https://www.docker.com/community-edition) 
   - [Gem Docker Sync](http://docker-sync.io/)

### Installation

```
$cd development
$./shell
$rm index.php
$install-magento2
```

**Web server:** http://0.0.0.0

**phpMyAdmin:** http://0.0.0.0:8080

**Local Emails:** http://0.0.0.0:8025


### Syncing Source Files (Mac OSX / Windows)

**Start syncing**

```$xslt
$cd development
$docker-sync-stack start
```

**Stop syncing**

```$xslt
$cd development
$docker-sync-stack stop
$docker-sync-stack clean
```


### MySQL Connection

```$xslt
Host: 0.0.0.0
Port: 3304
Database: magento
User: magento
Password: magento
```

### Available Commands

| Commands  | Description  | Options & Examples |
|---|---|---|
| init  | If you didn't use the CURL setup command above, please use this command changing the name of the project.  | `./init` |
| start  | If you continuing not using the CURL you can start your container manually  | |
| stop  | Stop your project containers  | |
| kill  | Stops containers and removes containers, networks, volumes, and images created to the specific project  | |
| shell  | Access your container  | `./shell root` | |
| magento  | Use the power of the Magento CLI  | |
| n98  | Use the Magerun commands as you want | |
| grunt-init  | Prepare to use Grunt  | |
| grunt  | Use Grunt specifically in your theme or completely, it'll do the deploy and the watcher.  | `./grunt luma` |
| xdebug  |  Enable / Disable the XDebug | |
| composer  |  Use Composer commands | `./composer update` |

### Git Flow

 1. Each task/fix should be implemented in separate feature branch
 2. Feature branch can be merged to development/master only after it will be reviewed/tested
 3. Each feature branch can have only one commit
 
### Extension Code Style

The Magento core development team uses the PSR-1: Basic Coding Standard and PSR-2: Coding Style Guide. Magento recommends that developers who create Magento extensions and customizations also use these standards.
Where possible, use PHP_CodeSniffer to automatically enforce these standards. Otherwise, you must apply these standards and requirements through rigorous code review.

[Magento Extension Quality Program Coding Standard](https://github.com/magento/marketplace-eqp)

## Extension Release    