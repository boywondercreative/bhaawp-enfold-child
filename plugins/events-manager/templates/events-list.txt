<?php
/*
 * Default Events List Template
 * This page displays a list of events, called during the em_content() if this is an events list page.
 * You can override the default display settings pages by copying this file to yourthemefolder/plugins/events-manager/templates/ and modifying it however you need.
 * You can display events however you wish, there are a few variables made available to you:
 * 
 * $args - the args passed onto EM_Events::output()
 * 
 */
//$args = apply_filters('em_content_events_args', $args);

//if( get_option('dbem_css_evlist') ) echo "<div class='css-events-list'>";
echo "here";
echo EM_Events::output(array('limit'=>20, 'pagination'=>1, 'format'=>"
[av_section color='main_color' custom_bg='#f7f7f7' src='' attachment='' attachment_size='' attach='scroll' position='top left' repeat='no-repeat' video='' video_ratio='16:9' min_height='' padding='default' shadow='no-shadow' id='' custom_class='']

[av_notification title='' color='custom' border='solid' custom_bg='#dd3333' custom_font='#ffffff' size='normal']#_LOCATIONNAME #_EVENTNAME[/av_notification]

[av_one_full first]
[av_image src='#_ATT{bhaa_event_image}' attachment='' attachment_size='full' align='center' animation='no-animation' link='' target='' styling='' caption='' font_size='' appearance='' custom_class=''][/av_image]
[/av_one_full]

[av_one_fifth first]
[av_notification title='' color='custom' border='solid' custom_bg='#012C52' custom_font='#ffffff' size='normal']Organiser[/av_notification]
[av_textblock custom_class='']
#_ATT{bhaa_organiser}
[/av_textblock]
[av_image src='#_ATT{bhaa_organiser_image}' attachment='' attachment_size='full' align='center' animation='no-animation' link='' target='' styling='' caption='' font_size='' appearance='' custom_class=''][/av_image]
[/av_one_fifth]

[av_one_fifth]
[av_notification title='' color='custom' border='solid' custom_bg='#012C52' custom_font='#ffffff' size='normal']Race[/av_notification]
[av_textblock custom_class='']
<span style='font-size: 14pt;'><strong>#_EVENTNAME</strong></span><br/>
<span style='font-size: 14pt;'><strong>#_LOCATIONNAME</strong></span><br/>
<span style='font-size: 14pt;'><strong>#_LOCATIONTOWN</strong></span>
[/av_textblock]
[av_button label='Race Info Page' link='#_EVENTURL' link_target='_blank' color='theme-color' custom_bg='#444444' custom_font='#ffffff' size='small' position='left' icon_select='yes' icon='ue897' font='entypo-fontello' custom_class='']
[/av_one_fifth]

[av_one_fifth]
[av_notification title='' color='custom' border='solid' custom_bg='#012C52' custom_font='#ffffff' size='normal']Type|Cost[/av_notification]
[av_textblock custom_class='']
<span style='font-size: 14pt;'>#_CATEGORYNAME</span><br/>
<span style='font-size: 14pt;'>#_ATT{bhaa_cost_member}</span><br/>
<span style='font-size: 14pt;'>#_ATT{bhaa_cost_daymember}</span>
[/av_textblock]
[/av_one_fifth]

[av_one_fifth]
[av_notification title='' color='custom' border='solid' custom_bg='#012C52' custom_font='#ffffff' size='normal']Distances[/av_notification]
[av_textblock custom_class='']
<span style='font-size: 14pt;'>#_ATT{bhaa_start_type}</span><br/>
<span style='font-size: 14pt;'>#_ATT{bhaa_race_1}</span><br/>
<span style='font-size: 14pt;'>#_ATT{bhaa_race_2}</span>
[/av_textblock]
[/av_one_fifth]

[av_one_fifth]
[av_notification title='' color='custom' border='solid' custom_bg='#012C52' custom_font='#ffffff' size='normal']Day | Time[/av_notification]
[av_textblock custom_class='']
<span style='font-size: 14pt;'>#_EVENTDATES</span><br/>
<span style='font-size: 14pt;'>#_EVENTTIMES</span>
[/av_textblock]
[av_button label='Enter Race Online' link='#_EVENTURL' link_target='' color='theme-color' custom_bg='#444444' custom_font='#ffffff' size='small' position='left' icon_select='yes' icon='ue897' font='entypo-fontello' custom_class='']
[/av_one_fifth]

[/av_section]
"));

//if( get_option('dbem_css_evlist') ) echo "</div>";
?>