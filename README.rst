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
