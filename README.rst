wakemakin-website
=================

The wakemakin website is installed by running preconfigure.sh as root (sudo).

It will install all the prerequisites and automatically configure them except
for:

- the database password
- the phymyadmin admin password

Ways to install
---------------

Run the below commands to deploy this website::
  
  apt-get install -y git
  git clone https://github.com/Wakemakin/wakemakin-website.git
  cd wakemakine-website
  ./preconfigure

This assumes that you have just created a server and you haven't made a user (therefore you are root).
If you wish to create a user and not run as root perform the following (again assuming you're on a new machine)::
  
  export username=<insert username here>
  adduser $username
  adduser $username sudo
  su $username
  cd ~
  sudo apt-get install -y git
  git clone https://github.com/Wakemakin/wakemakin-website.git
  cd wakemakine-website
  sudo ./preconfigure

Do replace <insert username here> with your desired username.

After the install it will open elinks. At first it will have a 'welcome to e-links' message box,
hit enter to dismiss it. To quit e-links hit q then confirm the quit. In e-link you are trying to 
confirm that the website text looks correct.

After the install
-----------------

So you've installed the website on a new server, congrats. You now need to set the DNS correctly. In
the Rackspace Cloud Control panel you need to change the DNS settings for wakemakin.com. There is an 
A-Record with an IP address. Modify that A-Record to the IP of the new server and it will use the new
server within the TTL (5-minute default). 

Supported Configurations
------------------------

This deploy script has been confirmed to work on the following configurations:

- Ubuntu 13.04 through Rackspace OpenCloud

Future Features
===============

Some features that would be nice have are:

- Support for additional configurations (not necessary, but nice)
- Support for automatically updating the DNS information
- Instead of updating the DNS information it'd be nice if it'd update a load-balancer
- It could support further subdomains and virtual hosts instead of just wakemakin.com
