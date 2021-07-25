<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use ArrayObject;

class SitemapController extends AppController {

    
   
    
    public function index() {
        //$this->auto_render=false;
        //$sitemap=new Model_Sitemap();
        //$data=$sitemap->sitemap();
        $data=$this->Categories->find('all',array(
            'fields'=>array('id','url','modified'),
            'order' => array('Categories.sort'),
        ));
        $data_stati=$this->Article->find('all',array(
            'fields'=>array('id','url','modified')
        ));
        //$data['Page']['stati']
        //debug($data);
   //     $i=0;
   //     foreach($data_stati as $d) {
   //         $data_stati2[$i]['Page']['url']="stati/".$d['Article']['url'];
   //         $data_stati2[$i]['Page']['modified']=$d['Article']['modified'];
   //         $i++;
   //     }
        /*$i=0;
        foreach($data_prices as $d) {
            $data_prices2[$i]['Page']['url']="ceny/".$d['Price']['url'];
            $data_prices2[$i]['Page']['modified']=$d['Price']['modified'];
            $i++;
        }*/
        $data=array_merge($data,$data_stati2);
        //debug($data_stati2);
        $xml=new DomDocument('1.0','utf-8');
        $urlset = $xml->appendChild($xml->createElement('urlset'));
        $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
       
        foreach($data as $item){

        $url = $urlset->appendChild($xml->createElement('url'));
        $loc = $url->appendChild($xml->createElement('loc'));
        $lastmod = $url->appendChild($xml->createElement('lastmod'));
        $loc->appendChild($xml->createTextNode("https://".$_SERVER['SERVER_NAME']."/".$item['Page']['url']));
        $lastmod->appendChild($xml->createTextNode(str_replace(" ","T",$item['Page']['modified'])."+00:00"));
        }

        $xml->formatOutput = true;
        //$xml->save('sitemap.xml');
        header("Content-type: text/xml; charset=UTF8");
        echo $xml->saveXML();
        exit();
        //$this->template->content=View::factory(ATMPL.'sitemap',$data);
        //$this->response->Body(View::factory(ATMPL.'sitemap',$data));
    }

    public function sitemap() {

        
        
        $this->loadModel('Articles');
   
        $this->loadModel('Categories');

        $categories=$this->Categories->find();

        $articles=$this->Articles->find();
        
        //$data['Page']['stati']
        //debug($data);
   //     $i=0;
   //     foreach($data_stati as $d) {
   //         $data_stati2[$i]['Page']['url']="stati/".$d['Article']['url'];
   //         $data_stati2[$i]['Page']['title']=$d['Article']['title'];
   //         $i++;
    //    }
    //    $i=0;
   //     foreach($data_prices as $d) {
   //         $data_prices2[$i]['Page']['url']="ceny/".$d['Price']['url'];
   //         $data_prices2[$i]['Page']['title']=$d['Price']['title'];
   //         $i++;
   //     }       
        //$data[5]['Page']['children']=$data_stati2;       
        //$bread[0]['last']=1;
        //$bread[0]['link']=0;
        //debug($data);
        //$data=array_merge($data,$data_stati2,$data_prices2);
        $this->set(compact('categories','articles'));
    }
}