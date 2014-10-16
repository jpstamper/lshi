<?php
require_once('calendar/classes/tc_calendar.php');

// header ( "Cache-Control: no-cache, must-revalidate"); 
//header ("Pragma: no-cache");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Lake Sumter Home Inspections - Inspection Order Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script language="javascript" src="calendar/calendar.js"></script>
<link href="calendar/calendar.css" rel="stylesheet" type="text/css"
</head>

<body>
   <form id="form1" name="form1" method=“get” action="order.php">
    <table>
    <tr>
    <td colspan="2">
       <h1>Inspections Order Form</h1>
    </td>
    </tr>
        <tr>
            <td>
          
      <img src="lshi_logo_440x300.jpg" alt="Lake Sumter Home Inspections" width="110" height="81">
            </td>
           <td>    
     <span><strong>Lake Sumter Home Inspections</strong></span><br />
               PO Box 279, Lady Lake, Florida 32158
<br />
               (352) 259-0037
               <br />
               Fax: (866) 323-3238
<br />
               E-Mail: info@LSHI.co

   </td></tr>
   </table>
    
    
     



        <br /><br />
        <table border="0" cellpadding="3" cellspacing="1">
            <tr>
                <td colspan="2">Please Choose the Inspection(s) to Order:</td>
                
                
                <td width="189" bgcolor="#CCCCCC" class="auto-style6">
                    Order Date: </td>
                <td colspan="4">
       <?
	  $myCalendar = new tc_calendar("orderDate", true, false);
	  //$myCalendar->autoSubmit(true, "", "order2.php"); 
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d'), date('m'), date('Y'));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2014, 2030);
	  $myCalendar->dateAllow('2014-01-01', '2030-01-01');
	  $myCalendar->setDateFormat('j F Y');
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();
	  ?>
          
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="homeInspection"  value="yes" checked/>Pre-Purchase Home Inspection</td>
                <td bgcolor="#CCCCCC" class="auto-style6">Requested Inspection Date:</td>
                <td colspan="4">
                          <?
	  $myCalendar = new tc_calendar("rInspectionDate", true , false);
	  //$myCalendar->autoSubmit(true, "", "order2.php"); 
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d'), date('m'), date('Y'));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2014, 2030);
	  $myCalendar->dateAllow('2014-01-01', '2030-01-01');
	  $myCalendar->setDateFormat('j F Y');
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();
	  ?>
	   <!--  <input type="button" name="button" id="button" value="Check the value" onclick="javascript:alert(this.form.date2.value);" />
                  <input type="text" name="requestedInspectionDate" Width="235px"> -->
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="wdoInspection" value="yes" />WDO - Wood Destroying Organisms
                </td>
                <td bgcolor="#CCCCCC" class="auto-style6">Requested Time:</td>
                <td colspan="4">
                    <input type="text" name="requestedTime" Width="235px">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="roofCertification" value="yes" />Roof Certification
                </td>
                <td>&nbsp;</td>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="windMitigation" value="yes" />Wind Mitigation
                </td>
                <td>&nbsp;</td>
                <td colspan="4">&nbsp;
                    </td>
            </tr>
            <tr>
                <td class="auto-style3" colspan="2">
                    <input type="checkbox" name="fourPoint" value="yes" />4 Point
                </td>
                <td class="auto-style3"></td>
                <td class="auto-style3" colspan="4"></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td bgcolor="#CCCCCC">Closing Date:</td>
                <td colspan="4">
                <?
	  $myCalendar = new tc_calendar("closingDate", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d'), date('m'), date('Y'));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(2014, 2030);
	  $myCalendar->dateAllow('2014-01-01', '2030-01-01');
	  $myCalendar->setDateFormat('j F Y');
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();
	  ?>
                </td>
            </tr>
            <tr>
                <td width="128" bgcolor="#CCCCCC" class="auto-style4">
                    Buyer's Agent: </td>
                <td width="332" class="auto-style5">
                    <input type="text" name="buyersAgentName" Width="235px">
                </td>
                <td bgcolor="#CCCCCC">Closing Company:</td>
                <td colspan="4">
                    <input type="text" name="closingCompany">
                </td>
            </tr>
            <tr>
                <td bgcolor="#CCCCCC" class="auto-style4">
                    Real Estate Agency:</td>
                <td class="auto-style5">
                    <input type="text" name="reAgency"  Width="235px">
                </td>
                <td bgcolor="#CCCCCC">Closing Co. Phone:</td>
                <td colspan="4">
                    <input type="text" name="closingPhone">
                </td>
            </tr>
            <tr>
                <td bgcolor="#CCCCCC" class="auto-style4">
                    Buyer's Agent Phone:</td>
                <td class="auto-style5">
                    <input type="text" name="buyersAgentPhone"  Width="235px">
                </td>
                <td bgcolor="#CCCCCC">Closing Co. Fax:</td>
                <td colspan="4">
                    <input type="text" name="closingFax" >
                </td>
            </tr>
            <tr>
                <td bgcolor="#CCCCCC" class="auto-style4">
                    Buyer's Agent E-mail</td>
                <td class="auto-style5">
                    <input type="text" name="buyersAgentEmail"  Width="235px">                </td>
                <td>&nbsp;</td>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td bgcolor="#CCCCCC" class="auto-style4">
                    Property Address: 
                </td>
                <td class="auto-style5">
                    <textarea rows="4" cols="18" name="propertyAddress" wrap="physical"></textarea>
               </td>
                
                <td bgcolor="#CCCCCC" class="auto-style7">As/Is Sale?</td>
                <td>
                    <input type="radio" name="asisSale"  value="yes" />YES
            &nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="radio" name="asisSale"  value="no" />NO
                </td>
           
                
                
            </tr>
            <tr>
                <td bgcolor="#CCCCCC" class="auto-style7">
                    Lockbox:</td>
                <td class="auto-style10">
                    <input type="text" name="lockbox" >
                </td>
                
                <td bgcolor="#CCCCCC" class="auto-style7">Owner Occupied?</td>
                <td>
                 <input type="radio" name="ownerOccupied"  value="yes" />YES
               &nbsp;&nbsp; &nbsp;&nbsp;
                <input type="radio" name="ownerOccupied"  value="no" />NO
                </td>
            
            </tr>
            <tr>
                <td colspan="2">&nbsp;
                    </td>
                <td bgcolor="#CCCCCC" class="auto-style7">ALL Utilities on?</td>
                <td>
                    <input type="radio" name="RB_Utilities"  value="yes" />YES
               &nbsp;&nbsp; &nbsp;&nbsp;
                <input type="radio" name="RB_Utilities"  value="no" />NO
                </td>
           
            </tr>
            <tr>
                <td bgcolor="#CCCCCC" class="auto-style8">Directions: </td>
                <td class="auto-style11">
                     <textarea rows="4" cols="18" name="directions" wrap="physical"></textarea>

                </td>
                <td bgcolor="#CCCCCC" class="auto-style7">Pets on Premises?</td>
                <td>
                    <input type="radio" name="pets"  value="yes" />YES
                 &nbsp;&nbsp; &nbsp;&nbsp;
                <input type="radio" name="pets"  value="no" />NO
                </td>
           
            </tr>
            <tr>
    <td colspan=2></td>
            	<td bgcolor="#CCCCCC" class="auto-style7">Keys present to ALL Doors? </td>
                <td>
                  <input type="radio" name="keys"  value="yes" />YES
                &nbsp;&nbsp; &nbsp;&nbsp;
                    <input type="radio" name="keys"  value="no" />NO
                </td>
        
            </tr>
            <tr>
                <td bgcolor="#CCCCCC">Buyer&#39;s Name</td>
                <td class="auto-style5">
                    <input type="text" name="buyersName"  Width="235px">
                </td>
                
                
              <td bgcolor="#CCCCCC" class="auto-style7">Washer &amp; Dryer Staying?</td>
               <td>
             <input type="radio" name="washerDryer"  value="yes" />YES
              &nbsp;&nbsp; &nbsp;&nbsp;
                <input type="radio" name="washerDryer"  value="no" />NO
                </td>
            
                
                
            </tr>
            <tr>
                <td bgcolor="#CCCCCC">Buyer&#39;s Address</td>
                <td class="auto-style5">
                    <textarea rows="4" cols="18" name="buyersAddress" wrap="physical"></textarea>
                </td>
                
                
                <td bgcolor="#CCCCCC" class="auto-style7">Will Buyer Attend Inspection?</td>
                <td>
                    <input type="radio" name="buyerAttend"  value="yes" />YES
              &nbsp;&nbsp; &nbsp;&nbsp;
                   <input type="radio" name="buyerAttend"  value="no" />NO
                </td>
           
            </tr>
            <tr>
                <td bgcolor="#CCCCCC">Buyer&#39;s Phone</td>
                <td class="auto-style5">
                    <input type="text" name="buyersPhone"  Width="235px">
                </td>
                <td>&nbsp;</td>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td bgcolor="#CCCCCC">Buyer&#39;s Cell:</td>
                <td class="auto-style5">
                    <input type="text" name="buyersCell"  Width="235px">
                </td>
                <td>&nbsp;</td>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td bgcolor="#CCCCCC">Buyer&#39;s E-Mail:</td>
                <td class="auto-style5">
                    <input type="text" name="buyersEmail" >
                </td>
                <td bgcolor="#CCCCCC">Listing Agent Name:</td>
                <td colspan="4">
                    <input type="text" name="listingAgentName"  Width="235px">
                </td>
            </tr>
                
              <tr>
                <td bgcolor="#CCCCCC">&nbsp;</td>
                <td class="auto-style5">&nbsp;</td>
                <td bgcolor="#CCCCCC">Listing Agent&#39;s Phone:</td>
                <td colspan="4">
                    <input type="text" name="listingAgentPhone"  Width="235px">
                  </td>
            </tr>
            <tr>
                <td bgcolor="#CCCCCC" class="auto-style7">Seller&#39;s Name:</td>
                <td class="auto-style10">
                    <input type="text" name="sellersName"  Width="235px">
                    </td>
                <td bgcolor="#CCCCCC" class="auto-style7">Listing Agent&#39;s E-Mail:</td>
                <td class="auto-style7" colspan="4">
                    <input type="text" name="listingAgentEmail"  Width="235px">
                </td>
            </tr>
               <tr>
                <td bgcolor="#CCCCCC">Seller&#39;s Phone:</td>
                <td class="auto-style5">
                    <input type="text" name="sellersPhone"  Width="235px">
                   </td>
                <td bgcolor="#CCCCCC">Real Estate Agency:</td>
                <td colspan="4">
                    <input type="text" name="listingAgency"  Width="235px">
                   </td>
            </tr>
               <tr>
                <td>&nbsp;</td>
                <td class="auto-style5">&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="4">&nbsp;</td>
            </tr>
               <tr>
                <td bgcolor="#CCCCCC">Comments/Instructions:</td>
                <td class="auto-style5" colspan="6">
                    <textarea rows="5" cols="50" name="comments" wrap="physical"></textarea>
                   </td>
            </tr>
               <tr>
                <td>&nbsp;</td>
                <td class="auto-style5">&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="4">&nbsp;</td>
            </tr>
               <tr>
                <td>&nbsp;</td>
                <td class="auto-style5">
                    Please fill in all necessary <br />fields before sending.<br />
                 
                    <input type="submit" value="E-Mail Inspection order" name="submit">
                    
                   </td>
                <td>
               
                   </td>
                <td colspan="4">&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td colspan="5">&nbsp;</td>
            </tr>
        </table>
</form>
    </div>





</body>
</html>
