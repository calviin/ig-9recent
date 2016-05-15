# IG Follow Count [![License](https://img.shields.io/badge/license-GPL--2.0%2B-green.svg)](http://www.gnu.org/licenses/gpl-2.0.html)

A simple Instagram analytics tool that continuously logs and graphs your follower count.

## Themes

####Default
![default theme](https://cloud.githubusercontent.com/assets/6676674/14550091/cdf47d92-0293-11e6-9e67-c54a1736ef24.png)

#### Dark
![dark theme](https://cloud.githubusercontent.com/assets/6676674/14550100/d756086a-0293-11e6-88f6-5ba2196582fb.png)

#### Newsprint
![newsprint theme](https://cloud.githubusercontent.com/assets/6676674/14550368/1b95b294-0296-11e6-95eb-d22f8a8beefd.png)

## Setup

SSH into server, `cd` to the public root and clone project.

```sh
git clone https://github.com/josephfusco/ig-follow-count .
```

Copy `config-sample.php` to `config.php` in the project root and fill in the values.

```sh
cp config-sample.php config.php && nano config.php
```

Replace the text within the brackets along with the brackets with the proper values. To learn more about how to attain these values visit [https://www.instagram.com/developer/authentication/](https://www.instagram.com/developer/authentication/).

```php
/** Instagram user ID */
define( 'IG_USER_ID', '{your user id here}' );

/** Instagram access token */
define( 'IG_ACCESS_TOKEN', '{your access token here}' );
```

After saving the newly made `config.php`, we just need to set the cron job.

```sh
crontab -e
```

In this example we are running `cron.php` every minute which is located in the project root. Add the following to the file and save. (replace '{yourwebsite.com}' with your domain)

```sh
*/1 * * * * wget -O /dev/null http://{yourwebsite.com}/cron.php
```

Upon saving the file it should confirm with the following message: `crontab: installing new crontab`.

Sample data will keep being displayed until `cron.php` is first ran. Once ran it will initially create the `log.csv` file and the sample data will stop loading.

## CSV Format

`Time,Grams,Followers,Following`

\* _Grams_ represents the number of photos on your account at the time

## Libs Used

+ [jQuery](http://jquery.com)
+ [jQuery Number Format](https://www.customd.com/articles/14/jquery-number-format-redux)
+ [Bootstrap](http://getbootstrap.com)
+ [HighCharts](http://www.highcharts.com/)

## TODO for recent.php
[x] Add commas for numbers in thousands
[x] Combine the 2 results tables into 1
[x] Hide results table on load, show it on click
[ ] Figure out a non hacky way to load results instead of using setTimeout
[ ] If any of the 9 pics returned is less than x hours old, discard it until you have 9 results that are > x hours old
[ ] Store results and save them so they can be compared to future results
[x] Grey out submit button on results, otherwise hitting it again will double feed results

## Creators

[Joseph Fusco](https://github.com/josephfusco) & [James Pistell](https://github.com/pistell)
