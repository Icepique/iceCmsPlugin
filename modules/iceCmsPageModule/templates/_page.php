<?php if ($form->getObject()->isNew()): ?>
<div class="sf_admin_form_row sf_admin_text sf_admin_form_field_position">
  <div>
    <label for="ice_model_cms_page_position" style="float: left;"><?= __('Position'); ?></label>
    <select id="ice_model_cms_page_position" name="ice_model_cms_page[position]">
      <option value="under"><?= __('under'); ?></option>
      <option value="after"><?= __('after'); ?></option>
    </select>

    <select id="ice_model_cms_page_page" name="ice_model_cms_page[page]">
      <?php
        $pages = iceModelCmsPagePeer::getAllPagesWithLevel();
        foreach($pages as $key => $page)
        {
          $selected = ($key == $sf_params->get('ice_model_cms_page[page]')) ? 'selected' : '';
          echo sprintf('<option value="%s" %s>%s</option>', $key, $selected, $page);
        }
      ?>
    </select>
  </div>
</div>
<?php endif; ?>
