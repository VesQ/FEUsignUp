<?php
# Simple Language file for the Calendar module.
# Copyright (c) 2004 by Rob Allen <rob@akrabat.com>

# Language: en_US

$lang['cal_description'] = 'Add, edit and remove events';
$lang['cal_addevent'] = 'Add Event';
$lang['cal_events'] = 'Events';
$lang['cal_categories'] = 'Categories';
$lang['cal_calendar_template'] = 'Calendar Template';
$lang['cal_list_template'] = 'List Template';
$lang['cal_upcominglist_template'] = 'Upcoming Template';
$lang['cal_event_template'] = 'Event Template';
$lang['cal_settings'] = 'Settings';

$lang['cal_categories_updated'] = 'Categories Updated';
$lang['cal_settings_updated'] = 'Settings Updated';
$lang['cal_add_event'] = 'Add Event';
$lang['cal_edit'] = 'Edit';
$lang['cal_delete'] = 'Delete';
$lang['cal_areyousure'] = 'Are you sure you want to delete';
$lang['cal_update_template'] = 'Update Template';

$lang['cal_sunday'] = 'Sunday';
$lang['cal_monday'] = 'Monday';
$lang['cal_tuesday'] = 'Tuesday';
$lang['cal_wednesday'] = 'Wednesday';
$lang['cal_thursday'] = 'Thursday';
$lang['cal_friday'] = 'Friday';
$lang['cal_saturday'] = 'Saturday';
$lang['cal_sun'] = 'Sun';
$lang['cal_mon'] = 'Mon';
$lang['cal_tues'] = 'Tues';
$lang['cal_wed'] = 'Wed';
$lang['cal_thurs'] = 'Thurs';
$lang['cal_fri'] = 'Fri';
$lang['cal_sat'] = 'Sat';

$lang['cal_january'] = 'January';
$lang['cal_february'] = 'February';
$lang['cal_march'] = 'March';
$lang['cal_april'] = 'April';
$lang['cal_may'] = 'May';
$lang['cal_june'] = 'June';
$lang['cal_july'] = 'July';
$lang['cal_august'] = 'August';
$lang['cal_september'] = 'September';
$lang['cal_october'] = 'October';
$lang['cal_november'] = 'November';
$lang['cal_december'] = 'December';

$lang['cal_date'] = 'Date';
$lang['cal_summary'] = 'Summary';
$lang['cal_details'] = 'Details';
$lang['cal_return'] = 'Return';
$lang['cal_to'] = 'to';
$lang['cal_upcoming_events'] = 'Upcoming Events';

$lang['cal_help'] = <<<EOT
		<h3>What does this do?</h3>
		<p>Calendar is a module for displaying events on your page. When the
		module is installed, a Calendar admin page is added to the plugins menu
		that will allow you to manage your events.</p>
		<h3>Security</h3>
		<p>The user must belong to a group with the 'Modify Calendar' permission
		in order to add, edit, or delete calendar event entries.</p>
		<h3>How do I use it?</h3>
		<p>The module is used in conjunction with the cms_module tag.
		This will insert the module into your template or page anywhere you wish,
		and display the calendar.  The code would look something like:
		<b>{cms_module module="Calendar"}</b></p>
		<h3>Locale</h3>
		<p>Calendar also supports translation of all text strings to another language. To support
		your language, add a file named <b><code>&lt;language&gt;.php</code></b> to the
		<code>modules/Calendar/lang</code> directory. I would suggest copying en_US.inc.php as a starting point.
		You can then select your language from the Settings tab in the Calendar admin.</p>
		<p>Note you can
		override the language used for a particular calendar displayed on the front end site by adding lang="xx_XX" to
		the {cms_module module="Calendar"} call. For instance: {cms_module module="Caldendar" lang="de_DE"}</p>
		<h3>What Parameters Exist?</h3>
		<table border=0 cellpadding=3 cellspacing=0>
		<tr>
			<td>display</td>
			<td>Either "calendar" or "list" or "upcominglist".
			Defaults to "calendar" <em>(optional)</em></td>
		</tr>
		<tr>
			<td>category</td>
			<td>Only display items for that category. Leaving unset, will show all categories. Note that
			you can limit to muliple categories by separating each one with a comma.<em>(optional)</em></td>
		</tr>
		<tr>
			<td>month</td>
			<td>Display entries for a particular month. If year is not set, then the current year is
				assumed. This option only works if display is set to "list" or "calendar". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>year</td>
			<td>Display entries for a particular year.
				This option only works if display is set to "list" or "calendar". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>limit</td>
			<td>Set to the maximum number of events to display. This option only works if display is set to "list" or "upcominglist". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>first_day_of_week</td>
			<td>Set to the first day of the week as a number between 0 and 6 (0 = Sunday). Default is 1 (Monday).
				This option only works if display is set to "calendar". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>summaries</td>
			<td>Set to 1 to display the summary information or 0 to not display it in calendar mode. Default is 1. <em>(optional)</em></td>
		</tr>
		<tr>
			<td>detail</td>
			<td>Set to 1 to display the detail information or 0 to not display it in list mode. Default is 0. <em>(optional)</em></td>
		</tr>
		<tr>
			<td>table_id</td>
			<td>Id to set for this calendar or list. This is useful for applying CSS styling. Default is "calendar-&lt;autogenerated id number&gt;". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>date_format</td>
			<td>Format to display the event's date (as used in <a href='http://www.php.net/manual/en/function.strftime.php' target='_blank'>strftime()</a>). Default is "%d/%b/%Y". <em>(optional)</em></td>
		</tr>
		<tr>
			<td>use_session</td>
			<td>Use a session variable to store the current month of the calendar. Default is ture. <em>(optional)</em></td>
		</tr>
		</table>

		<h3>Templates</h3>
		<p>All four types of display used on the front end are controlled from templates that can be changed in the admin. If you want to reset
		a template back to the default, then delete the entire template content in the admin and it will be reset on the next display of that calendar
		view on the front end site.</p>
		<h3>Sample CSS Styles</h3>

		<p>This is a set of example CSS rules to make the calendar view look good. To see in action use:
		<pre style="font-size: 12px">{cms_module module='Calendar' table_id='big'}</pre></p>
		<p>Rules:</p>
		<blockquote><pre style="font-size: 12px">
/* make all links red */
.calendar tr td a
{
color: red;
}

/* highlight "today" for the small calendar */
.calendar-today
{
font-weight: bold;
}

/* display the "upcominglist" as one line per entry (assuming table_id='cal-upcominglist') */
#cal-upcominglist .calendar-date-title
,#cal-upcominglist .calendar-summary-title
{
display: none;
}

#cal-upcominglist h2
,#cal-upcominglist .calendar-date
,#cal-upcominglist .calendar-summary
{
display: inline;
margin-right: 5px;
}

/* tidy up text sizes for lists */
#cal-list h1, #cal-upcominglist h1
{
color: red;
font-size: 120%;
}
#cal-list h2, cal-upcominglist h2
{
font-size: 110%;
}

/** large calendar rules (assuming table_id='big') **/
/* border on for #big */
#big{
margin: 0px;
border-collapse:    collapse;
border: 1px solid black;
}

/* nice squares for the #big table */
#big th
{
border: 1px solid black;
padding: 3px;
width: 75px;
}

#big td {
border: 1px solid black;
vertical-align: top;
padding: 3px;
height: 75px;
width: 75px;
}

/* format summaries nicely in #big */
#big ul
{
margin: 0px;
padding: 0px;
padding-left: 5px;
}

#big li
{
list-style-type: none;
padding: 0px;
margin: 0px;
}

/* background colours for #big */
#big td
{
background-color: silver;
}

#big .calendar-day
{
background-color: #80ff80;
}

#big .calendar-today
{
font-weight: normal;
background-color: #8080ff;
}

.calendar-event .calendar-date-title,
.calendar-event .calendar-summary-title,
.calendar-event .calendar-details-title
{
display: none;
}
</pre></blockquote>
EOT;
?>