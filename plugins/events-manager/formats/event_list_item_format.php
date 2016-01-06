<?php 
/**
 * The template for listing all future BHAA events.
 */
echo "[av_section color='main_color' custom_bg='#f7f7f7' src='' attachment='' attachment_size='' attach='scroll' position='top left' repeat='no-repeat' video='' video_ratio='16:9' min_height='' padding='default' shadow='no-shadow' id='' custom_class='']

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
<span style='font-size: 12pt;'><strong>#_EVENTNAME</strong></span><br/>
<span style='font-size: 12pt;'><strong>#_LOCATIONNAME</strong></span><br/>
<span style='font-size: 12pt;'><strong>#_LOCATIONTOWN</strong></span>
[/av_textblock]
[av_button label='Race Info Page' link='#_EVENTURL' link_target='' color='theme-color' custom_bg='#444444' custom_font='#ffffff' size='small' position='left' icon_select='yes' icon='ue897' font='entypo-fontello' custom_class='']
[/av_one_fifth]

[av_one_fifth]
[av_notification title='' color='custom' border='solid' custom_bg='#012C52' custom_font='#ffffff' size='normal']Type|Cost[/av_notification]
[av_textblock custom_class='']
<span style='font-size: 12pt;'>#_CATEGORYNAME</span><br/>
<span style='font-size: 12pt;'>#_ATT{bhaa_cost_member}{BHAA Members 10€}</span><br/>
<span style='font-size: 12pt;'>#_ATT{bhaa_cost_daymember}{Online Day Member 15€}</span><br/>
<span style='font-size: 12pt;'>#_ATT{bhaa_cost_daymember_offline}{Offline Day Member 20€}</span>
[/av_textblock]
[/av_one_fifth]

[av_one_fifth]
[av_notification title='' color='custom' border='solid' custom_bg='#012C52' custom_font='#ffffff' size='normal']Distances[/av_notification]
[av_textblock custom_class='']
<span style='font-size: 12pt;'>#_ATT{bhaa_start_type}</span><br/>
<span style='font-size: 12pt;'>#_ATT{bhaa_race_1}</span><br/>
<span style='font-size: 12pt;'>#_ATT{bhaa_race_2}</span>
[/av_textblock]
[/av_one_fifth]

[av_one_fifth]
[av_notification title='' color='custom' border='solid' custom_bg='#012C52' custom_font='#ffffff' size='normal']Day | Time[/av_notification]
[av_textblock custom_class='']
<span style='font-size: 12pt;'>#_EVENTDATES</span><br/>
<span style='font-size: 12pt;'>#_EVENTTIMES</span>
[/av_textblock]
[av_button label='Enter Race Online' link='#_EVENTURL' link_target='' color='theme-color' custom_bg='#444444' custom_font='#ffffff' size='small' position='left' icon_select='yes' icon='ue897' font='entypo-fontello' custom_class='']
[/av_one_fifth]

[/av_section]";
?>