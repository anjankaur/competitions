(function(){$(".card").each(function(){return $(this).height($(this).width())}),$(window).on("resize",function(){return $(".card").each(function(){return $(this).height($(this).width())})})}).call(this),function(){var t,e,n;Array.range=function(t,e,n){var r,a;if(r=[],"number"==typeof t)for(r[0]=t,n=n||1;e>=t+n;)r[r.length]=t+=n;else a="abcdefghijklmnopqrstuvwxyz",t===t.toUpperCase()&&(e=e.toUpperCase(),a=a.toUpperCase()),a=a.substring(a.indexOf(t),a.indexOf(e)+1),r=a.split("");return r},window.Vue&&$("#contest-entries").length&&(t=$('meta[name="ws::contest.entries"]').attr("content"),e=$('meta[name="ws::contest"]').attr("content"),n=$('meta[name="csrf_token"]').attr("content"),window.contest=new Vue({el:"#contest-entries",data:{entries:[],currentPage:1,totalPages:1,pages:[]},created:function(){return this.fetchData()},filters:{paginate:function(){var t;return t=this,this.entries.filter(function(e){return function(e){return e.page===t.currentPage}}(this))}},computed:{pageList:function(){var t;return t=this.currentPage,t=Math.min(this.totalPages,this.currentPage+3)-3,t=Math.max(1,t),Array.range(t,Math.min(this.currentPage+3,this.totalPages))}},methods:{fetchData:function(e){var r,a;return a=this,e||(e=Math.ceil(this.entries.length/16)),r=this.$resource(t),r.get({_token:n,page:e},function(t){var n,r,i,s,o;for(console.log(t),e=t.meta.pagination.current_page,a.totalPages=t.meta.pagination.total_pages,a.pages.push(e),a.pages.sort(),s=t.data,o=[],r=0,i=s.length;i>r;r++)n=s[r],n.page=e,o.push(a.entries.push(n));return o})},goToPage:function(t,e){return t.preventDefault(),this.currentPage=-1===e?Math.max(1,this.currentPage-1):0===e?Math.min(this.totalPages,this.currentPage+1):e,e=this.currentPage,-1===this.pages.indexOf(e)?this.fetchData(e):void 0},openEntry:function(t){var e,n;return t.preventDefault(),e=$(t.currentTarget).attr("href"),n=this.$resource(e),n.get({},function(t){var e;return e=$("<div>").addClass("modal-compare").html(t),$("body").append(e),$("#close-comparator").show().click(function(t){return t.preventDefault(),$(this).parent().parent().remove()})})},fbShare:function(t){return encodeURI("https://www.facebook.com/dialog/share_open_graph?app_id=1608489686097057&display=page&action_type=og.likes&action_properties="+JSON.stringify({object:t.link})+"&redirect_uri="+t.link)}}}))}.call(this);