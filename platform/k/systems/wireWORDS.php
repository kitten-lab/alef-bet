<?php 
// wire world DSL:

function wireINPUT($uniqueID, 
    ?string $ph = null,
    ?string $required = null,
    ){
        $hasPH = $ph ? " placeholder='$ph'" : "";
        
        if($required == true)
        { $isRequired = "required='true'"; } 
            else { $isRequired = ""; }

        echo "<div><label for='$uniqueID' id='$uniqueID'>$uniqueID: </label>
            <input 
            name='$uniqueID' 
            class='$uniqueID'
            $hasPH  
            $isRequired></div>";
}


function wireFILEinput($uniqueID, 
    ?string $ph = null,
    ?string $required = null,
    ){
        $hasPH = $ph ? " placeholder='$ph'" : "";
        
        if($required == true)
        { $isRequired = "required='true'"; } 
            else { $isRequired = ""; }

        echo "<div><label for='$uniqueID' id='$uniqueID'>$uniqueID: </label>
            <input 
            name='$uniqueID' 
            class='$uniqueID'
            type='file' 
            $hasPH  
            $isRequired></div>";
}


function wireTEXTAREA($uniqueID, 
    ?string $ph = null,
    ?string $required = null,
    ){
        $hasPH = $ph ? " placeholder='$ph'" : "";
        
        if($required == true)
        { $isRequired = "required='true'"; } 
            else { $isRequired = ""; }

        echo "<div><label for='$uniqueID' id='$uniqueID'>$uniqueID: </label>
        <textarea 
        cols='60' rows='5'
        name='$uniqueID'
        class='$uniqueID'  
            $hasPH  
            $isRequired></textarea>
            </div>";

}