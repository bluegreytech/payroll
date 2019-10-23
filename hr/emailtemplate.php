<html>
    <head>
        <title>Welcome to {companyname}</title>       
    </head>
    <body>
        <table cellspacing="0" style="border: 2px; width: 500px; height: 70px;">
            <tr>
                <td style="background: #bb342f;"><img src="{image_url}/images/logo-wide.png" alt="{companyname}"></td>              
            </tr>           
        </table>      
        <table cellspacing="0" style="border: 2px; width: 500px; height: 400px;">
            <tr>
                <td><b>Hello</b> {username},</td>
            </tr>
            <tr>
               <td>
                  <p><b>Employee Name:</b> {username}.</p>                
                  <p><b>Reason:</b> {reason}</p>
                  <p><b>No of days/hours:</b> {noofdays}</p>
                  <p><b>Type of Leave:</b> {typeofleave}</p>
                  <p><b>Leave Days:</b> {leavedays}</p>
                  <p><b>Leave From: </b>{leavefrom} to {leaveto}</p>
                  <p><b>Leave Status:</b> {leavestatus}</p>
               </td>
            </tr>
            <tr>
               <td><p>Regard,</p>
               <p>{companyname}</p></td>
            </tr>
        </table>
        <table cellspacing="0" style="border: 2px; width: 500px; height: 50px;">
            <tr>
                <td style="background: #000;"><p style="color: #fff; text-align: center;">Copyright © {year} {companyname}. All Rights Reserved</p></td>              
            </tr>           
        </table>        
    </body>
</html>