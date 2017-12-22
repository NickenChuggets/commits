<?php

namespace App\Controller;

use App\Entity\Commit;
use App\Entity\CommitSmall;
use App\Entity\ParentCommit;
use App\Entity\Tree;
use App\Entity\User;
use App\Entity\UserSmall;
use App\Entity\Verification;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;

class Commits extends Controller
{
    /**
     * @Route("/", name="commits", defaults={"_format"="html"})
     */
    public function index(string $_format): Response
    {
    	$serializer = new Serializer(
		    array(new ObjectNormalizer(null, new CamelCaseToSnakeCaseNameConverter()), new ArrayDenormalizer()),
		    array(new JsonEncoder())
		);

		$curl = curl_init();
		curl_setopt_array($curl, array(
		    CURLOPT_RETURNTRANSFER => 1,
		    CURLOPT_URL => 'https://api.github.com/repos/torvalds/linux/commits',
		    CURLOPT_USERAGENT => 'NickenChuggets',
		));
		$result = curl_exec($curl);
		echo('dump:');
		var_dump($result);
		var_dump(Commit::class);
		echo('end dump');
		$commits = $serializer->deserialize($result, 'App\Entity\Commit[]', 'json');
		curl_close($curl);
		echo('dump2');
		var_dump($commits);
		echo('end dump2');
        // Every template name also has two extensions that specify the format and
        // engine for that template.
        // See https://symfony.com/doc/current/templating.html#template-suffix
        return $this->render('commits/index.'.$_format.'.twig', ['commits' => $commits]);
    }

    /**
     * @Route("/commits/{slug}", name="commit")
     *
     */
    public function commitShow(Commit $commit): Response
    {
        return $this->render('commits/commit.html.twig', ['commit' => $commit]);
    }
}