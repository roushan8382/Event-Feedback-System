<html>

<style>
    body{
        background-image: url("image/home.jpg");
    }
    table{
        margin-left: 400px;
        margin-top: 40px;
    }
    h1{
        margin-left: 400px;
    }
</style>

    <body>
        <h1 style="color:darkblue;">Event Feedback Form :</h1>
        <form action="input.php" method="POST">
            <table border="1">
                <tr>
                    <td>
                        Student Name
                    </td>
                    <td>
                        <input type="text" name="sname" placeholder="Enter Your Name">
                    </td>
                </tr>
                <tr>
                    <td>
                        USN.
                    </td>
                    <td>
                        <input type="text" name="susn" placeholder="Enter Your USN">
                    </td>
                </tr>
                <tr>
                    <td>
                        Email Id.
                    </td>
                    <td>
                        <input type="email" name="semail" placeholder="Enter Your Email-Id">
                    </td>
                </tr>
                <tr>
                    <td>
                       Department
                    </td>
                    <td>
                    <select name="department"  required autocomplete = "off">
						<!-- <option value=""></option> -->
                        <option value="CSE">CSE</option>
                        <option value="ISE">ISE</option>
                        <option value="ECE">ECE</option>
                        <option value="CV">CV</option>
                        <option value="ME">ME</option>
                        
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        Event
                    </td>
                    <td>
                    <select name="event"  required autocomplete = "off">
						<!-- <option value=""></option> -->
                        <option value="BOOTCAMP">BOOTCAMP</option>
                        <option value="INDUSTRIAL VISIT">INDUSTRIAL VISIT</option>
                        <option value="FRESHERS DAY">FRESHERS DAY</option>
                        <option value="MAHA DASARA">MAHA DASARA</option>
                        <option value="ORIENTATION DAY">ORIENTATION DAY</option>
                        <option value="FAREWELL">FAREWELL</option>

                        
                    </select>
                    </td>

                </tr>
                <tr>
                    <td>
                        1. Please indicate your satisfaction with the event? :
                    </td>
                    <td>
                        <input type="radio" required value="POOR" name="q1" />Poor
                        <input type="radio" required value="FAIR" name="q1" />Fair
                        <input type="radio" required value="GOOD" name="q1" />Good
                        <input type="radio" required value="VERY GOOD" name="q1" />Very Good
                        <input type="radio" required value="EXCELLENT" name="q1" />Excellent
                    </td>
                </tr>
                <tr>
                    <td>
                        2. Please rate the performance of this event : 
                    </td>
                    <td>
                        <input type="radio" required value="POOR" name="q2" />Poor
                        <input type="radio" required value="FAIR" name="q2" />Fair
                        <input type="radio" required value="GOOD" name="q2" />Good
                        <input type="radio" required value="VERY GOOD" name="q2" />Very Good
                        <input type="radio" required value="EXCELLENT" name="q2" />Excellent
                    </td>
                </tr>
                <tr>
                    <td>
                        3. Expression of expectations for performance : 
                    </td>
                    <td>
                        <input type="radio" required value="POOR" name="q3" />Poor
                        <input type="radio" required value="FAIR" name="q3" />Fair
                        <input type="radio" required value="GOOD" name="q3" />Good
                        <input type="radio" required value="VERY GOOD" name="q3" />Very Good
                        <input type="radio" required value="EXCELLENT" name="q3" />Excellent
                    </td>
                </tr>
                <tr>
                    <td>
                        4. Respect or concern for speaker :  
                    </td>
                    <td>
                        <input type="radio" required value="POOR" name="q4" />Poor
                        <input type="radio" required value="FAIR" name="q4" />Fair
                        <input type="radio" required value="GOOD" name="q4" />Good
                        <input type="radio" required value="VERY GOOD" name="q4" />Very Good
                        <input type="radio" required value="EXCELLENT" name="q4" />Excellent
                    </td>
                </tr>
                <tr>
                    <td>
                        5. Facilitation of food : 
                    </td>
                    <td>
                        <input type="radio" required value="POOR" name="q5" />Poor
                        <input type="radio" required value="FAIR" name="q5" />Fair
                        <input type="radio" required value="GOOD" name="q5" />Good
                        <input type="radio" required value="VERY GOOD" name="q5" />Very Good
                        <input type="radio" required value="EXCELLENT" name="q5" />Excellent
                    </td>
                </tr>
                <tr>
                    <td>
                        6. How dou you think we encourage students after this event:
                    </td>
                    <td>
                        <input type="radio" required value="POOR" name="q6" />Poor
                        <input type="radio" required value="FAIR" name="q6" />Fair
                        <input type="radio" required value="GOOD" name="q6" />Good
                        <input type="radio" required value="VERY GOOD" name="q6" />Very Good
                        <input type="radio" required value="EXCELLENT" name="q6" />Excellent
                    </td>
                </tr>
                <tr>
                    <td>
                        7. Stimulation of interest in event :
                    </td>
                    <td>
                        <input type="radio" required value="POOR" name="q7" />Poor
                        <input type="radio" required value="FAIR" name="q7" />Fair
                        <input type="radio" required value="GOOD" name="q7" />Good
                        <input type="radio" required value="VERY GOOD" name="q7" />Very Good
                        <input type="radio" required value="EXCELLENT" name="q7" />Excellent
                    </td>
                </tr>
                <tr>
                    <td>
                        8. Overall rating :
                    </td>
                    <td>
                        <input type="radio" required value="POOR" name="q8" />Poor
                        <input type="radio" required value="FAIR" name="q8" />Fair
                        <input type="radio" required value="GOOD" name="q8" />Good
                        <input type="radio" required value="VERY GOOD" name="q8" />Very Good
                        <input type="radio" required value="EXCELLENT" name="q8" />Excellent
                    </td>
                </tr>
                <tr>
                    <td>
                            <input type="submit" name="submit">&nbsp;&nbsp;&nbsp;
                            <input type="reset" name="reset">
                    </td>
                </tr>
            </table>

        </form>
    </body>
</html>