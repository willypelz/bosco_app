/* [ ---- Gebo Admin Panel - file explorer ---- ] */

	$(document).ready(function() {
		// File Browser
		function openKCFinder(field_name, url, type, win) {
			alert("Field_Name: " + field_name + "nURL: " + url + "nType: " + type + "nWin: " + win); // debug/testing
			tinyMCE.activeEditor.windowManager.open({
				file: '/file-manager/browse.php?opener=tinymce&type=' + type,
				title: 'KCFinder',
				width: 700,
				height: 500,
				resizable: "yes",
				inline: true,
				close_previous: "no",
				popup_css: false
			}, {
				window: win,
				input: field_name
			});
			return false;
		}
		$('textarea#wysiwg_full').tinymce({
			// Location of TinyMCE script
			script_url 							: 'lib/tinymce/tinymce.min.js',
			// General options
			theme 								: "modern",
			plugins 							: "autoresize,table,image,link,emoticons,preview,media,contextmenu,paste,fullscreen,noneditable,template,advlist",
			// file browser
			file_browser_callback: function openKCFinder(field_name, url, type, win) {
				tinyMCE.activeEditor.windowManager.open({
					file: 'file-manager/browse.php?opener=tinymce&type=' + type + '&dir=image/themeforest_assets',
					title: 'KCFinder',
					width: 700,
					height: 500,
					resizable: "yes",
					inline: true,
					close_previous: false
				}, {
					window: win,
					input: field_name
				});
				return false;
			}
		});
	});
