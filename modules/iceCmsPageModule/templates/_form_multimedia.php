<?php

$cms_page = $form->getObject();

if ($cms_page->getMultimediaCount() > 0)
{
  include_partial('iceMultimediaModule/form_multimedia', array('multimedia' => $cms_page->getMultimedia()));
}
