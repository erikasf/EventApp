<?php include_once "common/header.php";?>
<div id = "main">
    <!--This isn't going to work right until i add the javascript-->
    <!-- If LOGGED IN -->
        <!-- content here -->
        <ul id = "list">
            <li class = "business colorBlue">
                <ul>
                    <li>Event Name : Its Bizznezz Time</li>
                    <li>Event Host : Sammy Smiling</li>
                    <li>Event Date: 2/27/2016</li>
                    <li>Event Start Time: 1:00pm</li>
                    <li>Event End Date: Same Day</li>
                    <li>Event End Time : 3:00pm</li>
                    <li>Event Address: 2169 Mission St, San Francisco</li>
                    <li>Event Special Info: </li>
                </ul><!--end of nested li-->
                <div class="draggertab tab"></div>
                <div class="colortab tab"></div>
                <div class="deletetab tab"></div>
                <div class="donetab tab"></div>
            </li><!--end of business event-->
            <li class = "Personal colorRed">
                <ul>
                   <li>Event Name : Its Birthday Time</li>
                    <li>Event Host : Susuan Smiling</li>
                    <li>Event Date: 4/27/2016</li>
                    <li>Event Start Time: 1:00pm</li>
                    <li>Event End Date: Same Day</li>
                    <li>Event End Time : 3:00pm</li>
                    <li>Event Address: 2169 Mission St, San Francisco</li>
                    <li>Event Special Info: Its a surprise party so shut up</li>
                    
                </ul><!-- end of th e nested personal list-->
                <div class="draggertab tab"></div>
                <div class="colortab tab"></div>
                <div class="deletetab tab"></div>
                <div class="donetab tab"></div>
            </li><!-- end of li class personal -->
           <li class = "charity colorGreen">
                <ul>
                   <li>Event Name : Its Give me your money time</li>
                    <li>Event Host : Susuan Smiling</li>
                    <li>Event Date: 4/27/2016</li>
                    <li>Event Start Time: 1:00pm</li>
                    <li>Event End Date: Same Day</li>
                    <li>Event End Time : 3:00pm</li>
                    <li>Event Address: 2169 Mission St, San Francisco</li>
                    <li>Event Special Info: Its a surprise party so shut up</li>
                    
                </ul><!-- end of th e nested charity list-->
                    <div class="draggertab tab"></div>
                    <div class="colortab tab"></div>
                    <div class="deletetab tab"></div>
                    <div class="donetab tab"></div>
                </li><!--end of charity list-->
            
        </ul><!--end of the #id-->
        <!-- adding new list items -->
        <form action = "" id = "add-new">
            <div>
                <labe for = "eventType">Event Type
                <iput type = "text" id = "new-list-event-type-text"name = "new-list-event-type-text"</labe>
                <label for = "eventName">Event Name
                <input type = "text" id = "new-list-item-text-name"name = "new-list-item-text-name"/></label>
                <label for = "eventHost">Event Host
                <input type = "text" id = "new-list-item-text-host"name = "new-list-item-text-host"/></label>
                <label for = "eventDate">Event Date
                <input type = "date" id = "new-list-item-text-date"name = "new-list-item-text-date"/></label>
                <label for = "eventTime">Event Time
                <input type = "time-local" id = "new-list-item-text-time"name = "new-list-item-text-time"/></label>
                <label for = "eventEnd">Event Ends
                <input type = "datetime-local" id = "new-list-item-text-endDateTime"name = "new-list-item-text-endDateTime"/></label>
                <label for = "eventLocationStreet">Event Street Address
                <input type = "text" id = "new-list-item-text-streetAddress"name = "new-list-item-streetAddress"/></label>
                  <label for = "eventLocationCity">Event City
                <input type = "text" id = "new-list-item-text-city"name = "new-list-item-city"/></label>
                <label for = "eventGuests">Invite List
                <input type = "text" id = "new-list-guests-text" name = "new-list-guests-text"/></label>
                <input type = "submit" id = "add-new-submit" value = "ADD" class = "button"/>
            </div>
        </form><!-- end of new add -->
        <div id = "share-area">
            <p> Public List Url: <a href = "#">URL GOES HERE</a>
            <small>(nobody but you will be able to edit this list)</small></p>
        </div>
        
    <!-- IF LOGGED OUT -->
    <!-- Alternate content here -->
    <!--if logged out can only see the basic list no other controls-->
    <ul id = "list">
        <li class = "colorRed">
            <ul>
                 <li>Event Name : Its Birthday Time</li>
            </ul>
        </li><!-- end of red -->
         <li class = "colorGreen">
            <ul>
                 <li>Event Name : Its Give me your money time</li>
            </ul>
        </li><!-- end of green-->
         <li class = "colorBlue">
            <ul>
                 <li>Event Name : Its Bizznezz Time</li>
            </ul>
        </li><!-- end of blue -->
    </ul><!-- end of #list-->
    
</div><!--end of #main div-->
<?php include_once 'common/sidebar.php';?>
<?php include_once 'common/footer.php';?>