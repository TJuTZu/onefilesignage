# Encode Explorer
by using Encode Explorer from http://encode-explorer.siineiolekala.net/ files can be uploaded with browser to web server.

# Raspberry pi
Instrucions how to use Raspberry pi see http://raspberrypi.org

## To use pi as server
- Install Apache
```
sudo apt-get install apache2 -y
```

- Test by going http://localhost/ or http://raspberrypi/ if installing trough SSH

- Install PHP (PHP7 3.12.2017)
```
sudo apt-get install php libapache2-mod-php -y 
sudo apt-get install php-gd -y
```
- Restart apache
```
sudo /etc/init.d/apache2 restart
```

## and/or to use pi as client
- Remove mouse cursor
```
sudo apt-get install unclutter
```
  
- Install Chromium if not already installed
```
sudo apt-get install -y rpi-chromium-mods
```

- Start browser at bootup
  Edit:
```
sudo nano ~/.config/lxsession/LXDE-pi/autostart
```
  
Add following lines:
```
@xset s off
@xset -dpms
@xset s noblank
@chromium-browser --noerrdialogs --incognito --kiosk http://localhost
```  
  where http://localhost is the address of index.php
  use http://localhost?dir=anotherfolder to show content from another folder also
  
  
# CEC
if TV is used as display to turn TV on and off 

- install cec-utils
```
  sudo apt-get intall cec-utils
```  
  
add following lines in crontab -e to turn display on during weekdays at 7:00 and turn it of at 20:00

crontab -e

```
# Turn monitor on
0 7 * * 1-5 echo "on 0" | cec-client -s

# Turn monitor off
0 20 * * 1-5 echo "standby 0" | cec-client -s
```
