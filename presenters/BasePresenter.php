<?php
abstract class BasePresenter extends Presenter {
	public $oldLayoutMode = FALSE;
	
	public function templatePrepareFilters($template) {
		$template->registerFilter('TemplateFilters::removePhp');
		LatteMacros::$defaultMacros['part'] = '<?php try{ $%% = $presenter->getPart%%() ?>';
		LatteMacros::$defaultMacros['/part'] = '<?php }catch(Exception $e){ Debug::processException($e, true);?><div class="error">Něco se nám tu pokakalo, počkejte, prosím, než to přebalíme.</div><?php }; ?>';
		parent::templatePrepareFilters($template);
	}
	
}
