<div class="container">
    <div class="main">
        <span id="error">
        </span>
        <form id="eventCreator" action="eventCreationPg2.php" method="POST" enctype="multipart/form-data">
            <table style="width=100%;" class = "listing">
                <tr>
                    <td><label>Event Name :<span>*</span></label></td>
                    <td><input name="name" maxlength="32" type="text" placeholder="eg: Train Party" required></td>
                </tr>
                <tr>
					<td><label>Description :</label></td>
					<td><textarea rows="4" cols="36" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="128" style="overflow:hidden" width="250" name="description" placeholder="eg: A party inside a train across Europe." form="eventCreator"></textarea></td>
                </tr>
				<tr>
					<td><label>Donor Information :</label></td>
					<td><textarea rows="4" cols="36" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" maxlength="128" style="overflow:hidden" width="250" name="donorInfo" placeholder="eg: Donors receive free event passes at any amount over $10..." form="eventCreator"></textarea></td>
                </tr>
                <tr>
					<td><label>Start Date :<span>*</span></label></td>
					<td><input name="startdate" type="date" placeholder="eg: 01/02/2018" required></td>
                </tr>
                <tr>
					<td><label>End Date :<span>*</span></label></td>
					<td><input name="enddate" type="date" placeholder="eg: 01/03/2018" required></td>
                </tr>
                <tr>
					<td><label>Location :<span>*</span></label></td>
					<td><input name="location" maxlength="32" type="text" placeholder="eg: Union Station" required></td>
                </tr>
                <tr>
					<td><label>Money Goal :<span>*</span></label></td>
					<td><input name="moneyProposed" type="int" placeholder="eg: $5,000" required></td>
                </tr>
                <tr>
					<td><label>Event Picture :<span>*</span></label></td>
					<td><input name="file" id="file" type="file" style="color:white;" required></td>
                </tr>
                <tr>
					<td></td>
					<td style = "text-align:center;"><input type="submit" value="Submit" class = "classicColor"/></td>
                </tr>
            </table>
        </form>
    </div>
</div>