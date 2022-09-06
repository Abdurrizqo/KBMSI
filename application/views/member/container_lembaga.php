<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
echo '<ul>';
echo '<li>'.anchor('member/kelembagaan/kbmsi', 'KBMSI');
	echo '<ul>';
		echo '<li>'.anchor('member/kelembagaan/kbmsi/profil', 'Profil').'</li>';
		echo '<li>'.anchor('member/kelembagaan/kbmsi/peraturan', 'Peraturan dan Tata Tertib').'</li>';
	echo '</ul>';
echo '</li>';
echo '<li>'.anchor('member/kelembagaan/emsi', 'EMSI');
	echo '<ul>';
		echo '<li>'.anchor('member/kelembagaan/emsi/profil', 'Profil').'</li>';
		echo '<li>'.anchor('member/kelembagaan/emsi/advo', 'Dept. Advokesma').'</li>';
		echo '<li>'.anchor('member/kelembagaan/emsi/kwu', 'Dept. KWU').'</li>';
		echo '<li>'.anchor('member/kelembagaan/emsi/humas', 'Dept. Humas').'</li>';
		echo '<li>'.anchor('member/kelembagaan/emsi/p2s', 'Dept. P2S').'</li>';
		echo '<li>'.anchor('member/kelembagaan/emsi/psdm', 'Dept. PSDM').'</li>';
	echo '</ul>';
echo '</li>';
echo '<li>'.anchor('member/kelembagaan/bpmsi', 'BPMSI');
	echo '<ul>';
		echo '<li>'.anchor('member/kelembagaan/bpmsi/profil', 'Profil').'</li>';
		echo '<li>'.anchor('member/kelembagaan/bpmsi/advo', 'Komisi Advokesma').'</li>';
		echo '<li>'.anchor('member/kelembagaan/bpmsi/uu', 'Komisi Perundang - Undangan').'</li>';
		echo '<li>'.anchor('member/kelembagaan/bpmsi/humas', 'Komisi Humas').'</li>';
	echo '</ul>';
echo '</li>';
echo '</ul>';
?>
{entries}
	<h2>{title}</h2>
	<p>{body}</p>
{/entries}