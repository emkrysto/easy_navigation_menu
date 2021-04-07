<?php
class nav {
    public $_active_link_on = true;
    public $_links;
    public $_contNav = "";

    public function setNav($id, $active_link)
    {
        $this->_id = $id;
        $this->active_link = $active_link;
    }

    public function addLink($id, $active, $name, $link, $id_parent)
    {
        $this->_links[] = array(
            "id" => intval($id),
            "active" => boolval($active),
            "name" => strval($name),
            "link" => strval($link),
            "id_parent" => intval($id_parent)
        );
    }

    public function getNav($id_parent = 0, $active_link = "")
    {
        $main_menu = ($id_parent == 0) ? 'class="mainmenu"' : "";

        $contNav = $this->_contNav;
        $this->_contNav .= "<span class=\"nav-arrow\"></span>";
        $this->_contNav .= "<ul $main_menu>";

        $countChilden = 0;
        foreach($this->_links as $n)
        {   
            if($id_parent == $n["id_parent"] && $n["active"] == true)
            {
                $countChilden++;    
                $active = (!empty($active_link) && $active_link == $n["link"]) ? " nav-active" : "";

                $link = ($n["link"] === '#') ? '#' : MODUL_LINK.$n["link"];
                $name = strtoupper($n["name"]);

                $this->_contNav .= "<li>";
                    $this->_contNav .= "<a class=\"floatL$active\" href=\"$link\">$name</a>";
                    $this->getNav($n["id"], $active_link);
                $this->_contNav .= "</li>";
                $arrow ="";
            }
            
        }
        $this->_contNav .= '</ul>';

        if($countChilden == 0) {
            $this->_contNav = $contNav; // no children no UL
        } 
    }

    public function viewNav(string $active_link)
    {
        $this->getNav(0, $active_link);
        echo $this->_contNav;
    }
}
?>