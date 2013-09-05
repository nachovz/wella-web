
function loadVideo(playerUrl, autoplay) {
	tb_show('', playerUrl + '&rel=1&border=0&fs=1&autoplay=1?TB_iframe=TRUE&width=680&height=410','');		
	
  /*swfobject.embedSWF(
      playerUrl + '&rel=1&border=0&fs=1&autoplay=' + 
      (autoplay?1:0), 'player', '500', '340', '9.0.0', false, 
      false, {allowfullscreen: 'true'});*/
}

function showMyVideos2(data) {
  var feed = data.feed;
  var entries = feed.entry || [];
  var html = ['<ul class="videos">'];
  for (var i = 0; i < entries.length; i++) {
    var entry = entries[i];
    var title = entry.title.$t.substr(0, 40)+"...";
	var author = entry.author[0].name.$t;
	var duration = Math.floor(entries[i].media$group.yt$duration.seconds / 60 ) + ':' + (entries[i].media$group.yt$duration.seconds % 60 ) + ' (' + entries[i].media$group.yt$duration.seconds + ' Segundos)';
    var thumbnailUrl = entries[i].media$group.media$thumbnail[0].url;
    var playerUrl = entries[i].media$group.media$content[0].url;
    html.push('<li class="video" onclick="loadVideo(\'', playerUrl, '\', true)">',
               '<img src="', 
              thumbnailUrl, '" width="220" height="160"/></span>','<br><span class="titlec">', title, '</span><br><span class="author">Speaker: ', author, '</span><br><span class="author">', duration, '</span></li>');
  }
  html.push('</ul><br style="clear: left;"/>');
  document.getElementById('videos2').innerHTML = html.join('');
  if (entries.length > 0) {
    loadVideo(entries[0].media$group.media$content[0].url, false);
  }
}