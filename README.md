# PHP MySQL Backup Script with Crontab

This repository contains a simple PHP script for backing up your MySQL database, along with instructions for setting up a crontab to automate backups.

## Usage

1. Clone or download the repository to your server.
```bash
git clone https://github.com/fahdi/php-mysql-backup-crontab.git
```

2. Edit the `backup.php` file with your MySQL database credentials.

3. Set up a cron job to run the script at regular intervals. Here's an example of a cron job that will run the script every day at 4 AM:

```bash
0 4 * * * /usr/bin/php /path/to/backup.php >/dev/null 2>&1

```

Make sure to replace `/path/to/backup.php` with the actual path to your `backup.php` file.

4. Save the cron job and exit the editor.


## Notes

- This script only backs up the MySQL database and not the files on your server. You may want to consider backing up your files as well, either manually or through a separate backup solution.

- Make sure to specify the correct time zone in your crontab commands or scripts if necessary.

- This script is provided as-is and without warranty. Please use at your own risk.


### Credits

This PHP script was written by [Fahad Murtaza](https://www.fahdmurtaza.com/) and is released under the [MIT License](https://opensource.org/license/mit/).


### Blog Post

[Protect Your Website: A Simple PHP Script to Periodically Backup Your MySQL Database](https://www.fahdmurtaza.com/protect-your-website-a-simple-php-script-to-periodically-backup-your-mysql-database/)
