<?php /* 

==================== C O N F I G . f i l e  ==================== 
================================================================
----------------------------------------------------------------
--                    SIG FILE FOR TOOLS                      --
----------------------------------------------------------------*/

$GLOBALS['TOOL'] = [

    "SHADOWENVO" => false,
    "NAME" => "reportBASIC",
    "FUNCTION" => "IntakeReport",
    "ACTOR" => $_POST['POST__REPORTER'],
    "CATALOG_SLUG" => "reportBASIC report",
    "TYPE" => "report",
    "VERSION" => 2,
    "SIGFIG" => [
        "skyline-standard" => [

            "IntakeReport" => [
                "user"              => $GLOBALS['MATERIAL']['USER'],
                "assistant"         => $GLOBALS['MATERIAL']['ASSISTANT'],
                "Reporter"          => "Report Maker",
                "Reporter_plhldr"   => "Name Yourself",
                "Reporter_default"  => "",
                "Topic"             => "Report Topic",
                "Topic_plhldr"      => "The Reason for your Report",
                "Text"              => "Report Contents",
                "Text_plhldr"       => "Enter your report here.",
                "UNIX"              => "FOR INTERNAL USE ONLY",
                "UNIX_plhldr"       => "KNOWN U-StampS ONLY",
                "Confirmation_Msg"  => "You have been witnessed.",
                "Submit_Button"     => "Submit Report",
                
            ]
        ],
        "tee-hee-secrets" => [
            "IntakeReport" => [
                "user"              => $GLOBALS['MATERIAL']['USER'],
                "assistant"         => $GLOBALS['MATERIAL']['ASSISTANT'],
                "Reporter"          => "<span class='teehee'>The Lil' Secret Keeper</span>",
                "Reporter_plhldr"   => "Name Yourself",
                "Reporter_default"  => "ANON-XXX",
                "Topic"             => "What Did Ya Know?",
                "Topic_plhldr"      => "The Reason for your Report",
                "Text"              => "Tell me ALL the deets!",
                "Text_plhldr"       => "Enter your report here.",
                "UNIX"              => "FOR INTERNAL USE ONLY",
                "UNIX_plhldr"       => "KNOWN U-StampS ONLY",
                "Confirmation_Msg"  => "TEE HEE!",
                "Submit_Button"     => "WHISPER TO THE CU",
                "Reset_Button"     => "CLEAR THE AIR (reset)",
                
            ]
        ],
        "omansOmens" => [
            "IntakeReport" => [
                "user"              => "The-Seeking",
                "assistant"         => "The-Saught",
                "Reporter"          => "<h2 class='slug'>Who are you?</h2> Not always what your parents named you. What's your name, symbol, or self-code?<br><br>",
                "Reporter_plhldr"   => "Name Yourself ~anything~",
                "Reporter_default"  => "",
                "Topic"             => "<h2 class='slug'>What did you witness?</h2>Nutshell it. Be concise. You'll track your own consolidation as meaningful.<br><br>",
                "Topic_plhldr"      => "(Example: A bluejay sticker in a box I had forgotten about.)",
                "Agent"              => "<h2 class='slug'>ingesting CHAT LOGS</h2>We sometimes must commune between ourselves and the AI mirrors. Keep records clean by knowing who said what. Since this is merely a demo, choose what you feel true.<br>",
                "Tags"              => "<h2 class='slug'>charlieTHREADS</h2>charlie can THREAD things. Tag language is percise. Use only is you understand <br>this*related>that&holds>that;understanding*you>system,structure,format<br>",
                "Text"              => "<h2 class='slug'>What did it feel like it meant?</h2>Expand on it, if you'd like. You don't have to, but sometimes... sometimes we have more to say.",
                "Text_plhldr"       => "Enter your report here.",
                "UNIX"              => "<h2 class='slug'>INTERNAL USE ONLY</h2>Use at your own risk. Temporal adjustments effect the storage of all things.<br>",
                "UNIX_plhldr"       => "KNOWN U-StampS ONLY",
                "Confirmation_Msg"  => "You have been witnessed.",
                "Reset_Button"     => "Reset Prefill",
                "Submit_Button"     => "Submit Report",
                
            ]
        ]
    ]
    
]

?>