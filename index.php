The following are the step to follow in other to connect your WAMP to phone

step1:
    make your phone as a network by on the hotspot
step2:
    connect the laptop to the hotspot of the phone
step3:
    press window btn + btn R 
step4:
    type in cmd
step5:
    from the commad prompt; type ipconfig
step6:
    copy the IPV4 address 
step7:
    paste it in a browser url
step8:
    from your laptop icon tray
step9:
    left click on the WAMPserver icon
step10:
    navigate to apache 
step11:
    click on httpd-vhosts.conf
step12:
    replace the Require local with Require all granted



How to make the IPV4 addrress  generated from the ipconfig to display the project directly

edit httpd-vhosts.conf and include the project name e.g rental_house

    DocumentRoot "${INSTALL_DIR}/www/rental_house/"
    <Directory "${INSTALL_DIR}/www/rental_house/">
