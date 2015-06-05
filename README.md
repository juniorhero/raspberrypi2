Welcome to the page, here you can get the source code to control all the 15 GPIO Pins and UART TX and UART RX pin of Raspberry Pi version 2.

Unlike other projects, you don't need to SSH login to Raspberry PI to control your PI GPIO pins.

Remember to get this project working, do the following

############################STEP1################

Login to your Pi terminal


############################STEP2####################
2 Install wiringPi v2.24 or above. Remember wiringPi for Raspberry Pi V2 need to be installed from https://git.drogon.net/?p=wiringPi;a=summary

Click on commit of the "master" package, then click on "snapshot" of first package

git clone git://git.drogon.net/wiringPi                                                                                                      
cd wiringPi                                                                                                      
git pull origin                                                                                                      
cd wiringPi ./build                                                                                                     

Now test wiringPi installation with 

cd wiringPi ./build                                                                                                                                                                                                          

##########################STEP3#####################

Follow the terminal commands below to install apache server and php compiler on raspberry pi 
sudo apt-get update                                                                                                      
sudo apt-get install apache2 apache2-doc apache2-utils                                                                                                      
sudo apt-get install libapache2-mod-php5 php5 php-pear php5-xcache                                                                                                     

after installing 
cd /var/www/ 
sudo nano switch.php

Now copy paste the code of this project named switch.php

you can access your raspberrypi server with your hostname which is "raspberrypi" by default or your raspberrypi ip address. Find it by terminal command, ifconfig
#############################STEP4#####

USAGE OF THIS PROJECT

TO GET THE REST API WORKING ON YOUR BROWSER, SWITCH.PHP access http://raspberrypi/switch.php

PASS GET Parameters to get GPIO ON, OFF

http://raspberrypi/switch.php?pin=0&switch=1

where "pin" number represents the pin number of wiringPi starting from 0 to 16 "switch" represents ON OFF state of the GPIO, for




##############################

OFF, PIN=0 ON, PIN=1

GPIO 18 ON http://raspberrypi/switch.php?pin=1&switch=1

GPIO 18 OFF http://raspberrypi/switch.php?pin=1&switch=0


#####PIN NUMBERS OF ALL GPIO and RX TX UART############

PORT Name pin number                                                                                                     
GPIO2 8                                                                                                                                                                 
GPIO3 9                                                                                                                                                           
GPIO4 7                                                                                                                             
GPIO7 11                                                                                                                                                                                                          
GPIO8 10                                                                                                     
GPIO9 13                                                                                                     
GPIO10 12                                                                                                      
GPIO11 14                                                                                                     
GPIO17 0                                                                                                      
GPIO18 1                                                                                                      
GPIO22 3                                                                                                      
GPIO23 4                                                                                                     
GPIO24 5                                                                                                     
GPIO25 6                                                                                                     
GPIO27 2                                                                                                     
UART TX 15                                                                                                      
UART RX 16                                                                                                     
Follow the pin numbers we have tested all pins with wiringPi                                                                                                                                                                                                          


#############WEAVED INSTALATION#

Install Weaved on Raspberry Pi on HTTP port 80 and control your Raspberry Pi from round the world.

    wget https://github.com/weaved/installer/raw/master/binaries/weaved-nixinstaller_1.2.13.bin
   
    chmod +x weaved-nixinstaller_1.2.13.bin
    
    ./weaved-nixinstaller_1.2.13.bin
    
    Choose Web (http) on port 80 
    
    Enter the e-mail address and password for your Weaved account
    
    Enter an alias, or nickname for your device
    
    



Feel Free to ask me any questions, bugs or problems you face. I will be extremely happy to assist you about this.                                                                                                     
