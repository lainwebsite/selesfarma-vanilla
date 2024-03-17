<?php
/*
Template Name: GMA Home
*/
?>

<?php
// Replace 'YOUR_GRAPHQL_ENDPOINT' with the actual URL of your WPGraphQL endpoint.
$graphql_endpoint = 'https://stg-globalma-staging.kinsta.cloud/gma-api';

// Define your GraphQL query.
$graphql_query = '
query NewQuery {
  homepages {
    edges {
      node {
        homepageField {
          aboutImage1 {
            node {
              sourceUrl
            }
          }
          aboutImage2 {
            node {
              sourceUrl
            }
          }
          aboutImage3 {
            node {
              sourceUrl
            }
          }
          aboutHeading
          heroButtonLink
          heroButtonText
          heroDescription
          heroHeading
          numbersDescriptionBottom
          numbersDescriptionTop
          numbersImage1 {
            node {
              sourceUrl
            }
          }
          numbersImage2 {
            node {
              sourceUrl
            }
          }
          numbersImage3 {
            node {
              sourceUrl
            }
          }
          numbersImage4 {
            node {
              sourceUrl
            }
          }
          numbersImage5 {
            node {
              sourceUrl
            }
          }
          numbersImage6 {
            node {
              sourceUrl
            }
          }
          numbersNumber1
          numbersNumber2
          numbersNumber3
          numbersNumber4
          numbersNumber5
          numbersNumber6
          numbersText1
          numbersText2
          numbersText3
          numbersText4
          numbersText5
          numbersText6
          quoteUnderAbout
          storiesMarqueeText
          storiesClosingQuote
          storiesHeading
          storiesStoryHeadingBottom1
          storiesStoryHeadingBottom2
          storiesStoryHeadingTop1
          storiesStoryHeadingTop2
          storiesStoryImageCaption1
          storiesStoryImageCaption2
          storiesStoryImage1 {
            node {
              sourceUrl
            }
          }
          storiesStoryImage2 {
            node {
              sourceUrl
            }
          }
          footerButtonLink
          footerButtonText
          footerContactText
          footerFollowText
          footerHeading
          footerMarqueeText
          footerMarqueeLink
          footerBottomImage {
            node {
              sourceUrl
            }
          }
          footerPeopleImage1 {
            node {
              sourceUrl
            }
          }
          footerPeopleImage2 {
            node {
              sourceUrl
            }
          }
          footerPeopleImage3 {
            node {
              sourceUrl
            }
          }
          footerPeopleImage4 {
            node {
              sourceUrl
            }
          }
          footerPeopleImage5 {
            node {
              sourceUrl
            }
          }
          involveHeading
          involvePointButtonLink1
          involvePointButtonLink2
          involvePointButtonLink3
          involvePointButtonText1
          involvePointButtonText2
          involvePointButtonText3
          involvePointDescription1
          involvePointDescription2
          involvePointDescription3
          involvePointHeading1
          involvePointHeading2
          involvePointHeading3
          involvePointImage1 {
            node {
              sourceUrl
            }
          }
          involvePointImage2 {
            node {
              sourceUrl
            }
          }
          involvePointImage3 {
            node {
              sourceUrl
            }
          }
          lightHeadingBottom
          lightHeadingTop
          stickyButtonLink
          stickyButtonText
          involvePointImageText1
          involvePointImageText2
          involvePointImageText3
        }
        contact {
          facebookLink
          instagramLink
          xLink
          youtubeLink
          address
        }
        navigationLink {
          fieldGroupName
          navigationLink1
          navigationLink2
          navigationLink3
          navigationLink4
          navigationLink5
          navigationLink6
          navigationLink7
          navigationText1
          navigationText2
          navigationText3
          navigationText5
          navigationText4
          navigationText6
          navigationText7
        }
        footerLink {
          footerLink1
          footerLink10
          footerLink2
          footerLink3
          footerLink4
          footerLink5
          footerLink6
          footerLink7
          footerLink8
          footerLink9
          footerText1
          footerText10
          footerText2
          footerText3
          footerText4
          footerText5
          footerText6
          footerText7
          footerText8
          footerText9
        }
      }
    }
  }
}
';

// Set up the cURL request.
$ch = curl_init($graphql_endpoint);

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(array('query' => $graphql_query)));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request and get the response.
$response = curl_exec($ch);

// Check for cURL errors.
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
} else {
    // Parse the response body.
    $data = json_decode($response);

    // Access the data as needed.
    if ($data) {
        // print_r($data);
        $home = $data->data->homepages->edges[0]->node->homepageField;
        $contact = $data->data->homepages->edges[0]->node->contact;
        $nav = $data->data->homepages->edges[0]->node->navigationLink;
        $footer = $data->data->homepages->edges[0]->node->footerLink;
    } else {
        echo 'No posts found.';
    }
}

// Close cURL session.
curl_close($ch);
?>

<?php
  $BASE_URL = "https://stg-globalma-staging.kinsta.cloud/wp-content/uploads/home-assets";
  $HOME_URL = "https://stg-globalma-staging.kinsta.cloud";
?>

<!DOCTYPE html>
<html page-code="6572847c4972bd12860e45a1" class=" w-mod-js">

<head>
  <meta charset="utf-8">
  <title>Global Mission Awareness</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="<?= $BASE_URL ?>/css/style.css" rel="stylesheet" type="text/css">
  <style>
    @media (min-width:992px) {
      html.w-mod-js:not(.w-mod-ix) [data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a59"] {
        -webkit-transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a66"] {
        -webkit-transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a58"] {
        -webkit-transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a5b"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a61"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a64"] {
        -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
        -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
        -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
        transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a63"] {
        -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="233c431e-946f-d98f-308d-049ae97f1c19"] {
        -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b1f12118-ca07-b299-71ca-bae7cdec275e"] {
        -webkit-transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b1f12118-ca07-b299-71ca-bae7cdec276b"] {
        -webkit-transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b1f12118-ca07-b299-71ca-bae7cdec275d"] {
        -webkit-transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b1f12118-ca07-b299-71ca-bae7cdec2760"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b1f12118-ca07-b299-71ca-bae7cdec2766"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b1f12118-ca07-b299-71ca-bae7cdec2769"] {
        -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
        -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
        -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
        transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b1f12118-ca07-b299-71ca-bae7cdec2768"] {
        -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="b1f12118-ca07-b299-71ca-bae7cdec2771"] {
        -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="0333404f-fea2-f83d-6dd0-710846452984"] {
        -webkit-transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="0333404f-fea2-f83d-6dd0-710846452991"] {
        -webkit-transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 25%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        opacity: 0;
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="0333404f-fea2-f83d-6dd0-710846452983"] {
        -webkit-transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0, 0) scale3d(1.05, 1.05, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="0333404f-fea2-f83d-6dd0-710846452986"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="0333404f-fea2-f83d-6dd0-71084645298c"] {
        opacity: 0;
        -webkit-transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="0333404f-fea2-f83d-6dd0-71084645298f"] {
        -webkit-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
        -moz-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
        -ms-transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
        transform: translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(45deg) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="0333404f-fea2-f83d-6dd0-71084645298e"] {
        -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }

      html.w-mod-js:not(.w-mod-ix) [data-w-id="0333404f-fea2-f83d-6dd0-710846452997"] {
        -webkit-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -moz-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        -ms-transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
        transform: translate3d(0, 0%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);
      }
    }
  </style>
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="<?= $BASE_URL ?>/js/webfont.js" type="text/javascript"></script>
  <script
    type="text/javascript">WebFont.load({ google: { families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"] } });</script>
  <script
    type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
    <link href="<?= $BASE_URL ?>/images/658817dde3743446140f7e9e_GMA logo.webp" rel="shortcut icon" type="image/x-icon">
    <link href="<?= $BASE_URL ?>/images/658817dde3743446140f7e9e_GMA logo.webp" rel="apple-touch-icon">
  <style>
    [text-split] {
      opacity: 0;
    }

    html.w-editor [text-split] {
      opacity: 1;
    }

    .word {
      overflow: hidden;
      padding-bottom: 0.1em;
      margin-bottom: -0.1em;
      transform-origin: bottom;
    }

    html.lenis {
      height: auto;
    }

    .lenis.lenis-smooth {
      scroll-behavior: auto;
    }

    .lenis.lenis-smooth [data-lenis-prevent] {
      overscroll-behavior: contain;
    }

    .lenis.lenis-stopped {
      overflow: hidden;
    }
  </style>
</head>

<body class="body">
  <div class="page_wrapper">
    <div data-w-id="4fb45e9a-ae40-6f76-f9ec-efc9bea82dca" style="opacity:1;display:flex" class="section-load-screen">
      <div class="loading-screen_logo-component">
        <div data-w-id="4fb45e9a-ae40-6f76-f9ec-efc9bea82dcc"
          style="-webkit-transform:translate3d(null, -100px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(null, -100px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(null, -100px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(null, -100px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
          class="loading-screen_logo-wrapper overflow-hidden"><img
            src="<?= $BASE_URL ?>/images/659e0e818e8074c4c3718313_gma%20logo%20fire.webp" loading="eager" width="80"
            style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(90deg) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(90deg) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(90deg) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(90deg) rotateZ(0) skew(0, 0);transform-style:preserve-3d"
            alt="GMA Logo" data-w-id="4fb45e9a-ae40-6f76-f9ec-efc9bea82dcd" class="preloader_logo_fire"><img
            src="<?= $BASE_URL ?>/images/659e0e8364d15ff126c96956_gma%20logo%20lingkaran.webp" loading="eager" width="80"
            style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(90deg) rotateZ(0deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(90deg) rotateZ(0deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(90deg) rotateZ(0deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(90deg) rotateZ(0deg) skew(0, 0);transform-style:preserve-3d"
            alt="GMA Logo" data-w-id="125515c6-7850-a495-0fbc-42a73c2b690a"></div>
      </div>
      <div data-w-id="4fb45e9a-ae40-6f76-f9ec-efc9bea82dd1" class="load-screen-panel load-screen-top"></div>
      <div data-w-id="4fb45e9a-ae40-6f76-f9ec-efc9bea82dd2"
        style="-webkit-transform:translate3d(0, 0px, 0px) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0px, 0px) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0px, 0px) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0px, 0px) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d"
        class="load-screen-panel load-screen-bottom"></div>
    </div>
    <div class="cursor-wrapper">
      <div data-w-id="1d73cdf7-666d-440b-de3b-071010469ac0" class="cursor-dot_invert"></div>
      <div data-w-id="d0d15d80-6c6e-7038-606c-d80fc547ea1f" class="cursor-dot"></div>
      <div class="cursor-circle"></div>
      <div class="link"></div>
      <div class="linksmall"></div>
    </div>
    <div class="wrapper">
      <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease"
        role="banner" class="navbar w-nav">
        <div class="logo_left">
          <div class="div_logo_hero"><a data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6aef8" href="<?= $HOME_URL ?>/"
              class="brand w-nav-brand">
              <div style="width:210px;height:80px" class="logo_hero padding_small_logo"><img
                  src="<?= $BASE_URL ?>/images/658817dde3743446140f7e9e_GMA%20logo.webp" loading="lazy" style="width:48px;height:48px"
                  alt="GMA Logo" class="logo_hero_left"><img
                  src="<?= $BASE_URL ?>/images/658817dc44c99d680d6d7a0d_GMA%20Logo%20Text.webp" loading="lazy"
                  style="-webkit-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  alt="GMA Logo Text" class="logo_hero_right"></div><img src="<?= $BASE_URL ?>/images/657284a2a970f11001669947_Frame.svg"
                loading="lazy" alt="" class="image-4">
            </a><img src="<?= $BASE_URL ?>/images/657284a2a970f11001669947_Frame.svg" loading="lazy" alt=""
              class="corner_nav sticky-top"></div>
        </div>
        <div class="container-nav w-container">
          <nav role="navigation" class="padding_top_xsmall w-nav-menu"><img
              src="<?= $BASE_URL ?>/images/658143f6e103950e58ea23c3_gma%20nav%20new%202.svg" loading="eager" alt="" class="bg_nav"><a
              href="<?= $nav->navigationLink1 ?>" class="nav-link-3 nav linksmall w-inline-block">
              <div class="button-text-wrapper-2">
                <div class="button-text-2"><?= $nav->navigationText1 ?></div>
                <div class="button-text-2 active"><?= $nav->navigationText1 ?></div>
              </div>
            </a><a href="<?= $nav->navigationLink2 ?>" class="nav-link-3 nav linksmall w-inline-block">
              <div class="button-text-wrapper-2">
                <div class="button-text-2"><?= $nav->navigationText2 ?></div>
                <div class="button-text-2 active"><?= $nav->navigationText2 ?></div>
              </div>
            </a><a href="<?= $nav->navigationLink3 ?>" class="nav-link-3 nav linksmall w-inline-block">
              <div class="button-text-wrapper-2">
                <div class="button-text-2"><?= $nav->navigationText3 ?></div>
                <div class="button-text-2 active"><?= $nav->navigationText3 ?></div>
              </div>
            </a><a href="<?= $nav->navigationLink4 ?>" class="nav-link-3 nav linksmall w-inline-block">
              <div class="button-text-wrapper-2">
                <div class="button-text-2"><?= $nav->navigationText4 ?></div>
                <div class="button-text-2 active"><?= $nav->navigationText4 ?></div>
              </div>
            </a>
            <div class="menu-link-wrapper">
              <a href="#" class="nav-link-3 nav linksmall w-inline-block" id="menu-float-button" style="position: relative;">
                <div class="button-text-wrapper-2">
                  <div class="button-text-2"><?= $nav->navigationText5 ?></div>
                  <div class="button-text-2 active"><?= $nav->navigationText5 ?></div>
                </div>
              </a>
              <div class="floating-menu" style="display: none;">
                <a href="https://google.com/" target="_blank" class="nav-link-3 nav linksmall w-inline-block">
                  <div class="button-text-wrapper-2" style="white-space: nowrap;">
                    <div class="button-text-2" style="color: black;">Blogs</div>
                    <div class="button-text-2 active">Blogs</div>
                  </div>
                </a>
                <a href="https://open.spotify.com/show/4qv5I5EuJHDLJwbLwkmvFp?si=1ab0efec01c34e0d" target="_blank" class="nav-link-3 nav linksmall w-inline-block">
                  <div class="button-text-wrapper-2" style="white-space: nowrap;">
                    <div class="button-text-2" style="color: black;">Podcast on Spotify</div>
                    <div class="button-text-2 active">Podcast on Spotify</div>
                  </div>
                </a>
                <a href="https://podcasts.apple.com/us/podcast/kingdom-family-talks-with-leif-hetland/id1146945661" target="_blank" class="nav-link-3 nav linksmall w-inline-block">
                  <div class="button-text-wrapper-2" style="white-space: nowrap;">
                    <div class="button-text-2" style="color: black;">Podcast on Apple Podcast</div>
                    <div class="button-text-2 active">Podcast on Apple Podcast</div>
                  </div>
                </a>
                <a href="https://shop.globalmissionawareness.com/" target="_blank" class="nav-link-3 nav linksmall w-inline-block">
                  <div class="button-text-wrapper-2" style="white-space: nowrap;">
                    <div class="button-text-2" style="color: black;">Store</div>
                    <div class="button-text-2 active">Store</div>
                  </div>
                </a>
              </div>
            </div>
            <style>
                .menu-link-wrapper {
                  position: relative;
                }

                .floating-menu {
                  position: absolute;
                  padding: 20px;
                  display: flex;
                  gap: 10px;
                  flex-direction: column;
                  top: calc(100% + 10px);
                  left: 0px;
                  background: #fffff5;
                  z-index: 100;
                  border-radius: 20px;
                  box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
                }

                .sidebar-floating-menu {
                  display: flex;
                  align-items: flex-start !important;
                  gap: 10px;
                  flex-direction: column;
                  background: #fff;
                  z-index: 100;
                  border-radius: 20px;
                }
                </style>
            <a href="<?= $nav->navigationLink6 ?>" class="nav-link-3 nav linksmall w-inline-block">
              <div class="button-text-wrapper-2">
                <div class="button-text-2"><?= $nav->navigationText6 ?></div>
                <div class="button-text-2 active"><?= $nav->navigationText6 ?></div>
              </div>
            </a></nav>
          <div class="w-nav-button">
            <div class="w-icon-nav-menu"></div>
          </div>
        </div>
        <div class="div_logo_hero">
          <div class="right-donate"><img src="<?= $BASE_URL ?>/images/657284a2a970f11001669948_Frame%20%281%29.svg" loading="eager" alt=""
              class="image-5"><a href="<?= $nav->navigationLink7 ?>" class="donation-wrapper link w-inline-block"><img
                src="<?= $BASE_URL ?>/images/657284a2a970f1100166992d_%F0%9F%A6%86%20icon%20_like_.svg" loading="eager" alt="Heart"
                class="image">
              <div><?= $nav->navigationText7 ?></div>
            </a></div><img src="<?= $BASE_URL ?>/images/657284a2a970f11001669948_Frame%20%281%29.svg" loading="eager" alt=""
            class="corner_nav right"><img src="<?= $BASE_URL ?>/images/659e42e574685132737c7263_corner%20hp.svg" loading="eager" alt=""
            class="bg_nav-mobile">
        </div>
        <div class="top_line"></div>
      </div>
      <div data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6af12" class="hero-section">
        <div class="main-content-wrapper hero">
          <div class="follow_us_hero">
            <div class="follow_us_hero_text">FOLLOW US</div>
            <div class="flex_logo"><a href="<?= $contact->facebookLink ?>" target="_blank" class="linksmall w-inline-block"><img
                  src="<?= $BASE_URL ?>/images/657284a2a970f11001669939_FB.svg" loading="lazy" alt="Facebook" class="social_icon"></a><a
                href="<?= $contact->instagramLink ?>" target="_blank" class="linksmall w-inline-block"><img src="<?= $BASE_URL ?>/images/65844e942065cd7b41a89c2b_Instagram%20SVG.svg"
                  loading="lazy" alt="Instagram" class="social_icon"></a><a target="_blank" href="<?= $contact->youtubeLink ?>"
                class="linksmall w-inline-block"><img src="<?= $BASE_URL ?>/images/65844e84c10900ecd482fcc5_Youtube%20SVG.svg"
                  loading="lazy" alt="Youtube" class="social_icon"></a><a href="<?= $contact->xLink ?>" target="_blank" class="linksmall w-inline-block"><img
                  src="<?= $BASE_URL ?>/images/65844e83fc7fac39e4d4787e_X%20SVG.svg" loading="lazy" alt="X" class="social_icon"></a>
            </div>
          </div>
          <div class="hero-text-wrapper">
            <div class="header-wrapper">
              <h1 letters-slide-up="" text-split="" class="heading hero"><?= $home->heroHeading ?></h1>
              <div class="_33ch hero"><?= $home->heroDescription ?></div><a data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6af1c"
                style="opacity:0" href="<?= $home->heroButtonLink ?>" class="button link hero w-inline-block">
                <div class="button_text"><?= $home->heroButtonText ?></div>
                <div data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6af1f"
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="button-icon w-embed"><svg width="100%" height="100%" viewBox="0 0 59 59" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M42.8186 13.3186L40.1905 15.9468L51.8853 27.6416H0V31.3585H51.8853L40.1905 43.0532L42.8186 45.6814L59 29.4999L42.8186 13.3186Z"
                      fill="currentColor"></path>
                  </svg></div>
                <div data-w-id="be659cf1-55d7-8aaa-a220-7b7aba73908d"
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="button-icon w-embed"><svg width="100%" height="100%" viewBox="0 0 59 59" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M42.8186 13.3186L40.1905 15.9468L51.8853 27.6416H0V31.3585H51.8853L40.1905 43.0532L42.8186 45.6814L59 29.4999L42.8186 13.3186Z"
                      fill="currentColor"></path>
                  </svg></div>
              </a>
            </div>
          </div>
          <div class="hero_container_video">
            <div class="gradient_video"></div>
            <div
              data-poster-url="<?= $BASE_URL ?>/images/657284a2a970f11001669949_new%20bg%20video%20gma%202-poster-00001.jpg"
              data-video-urls="<?= $BASE_URL ?>/images/657284a2a970f11001669949_new%20bg%20video%20gma%202-poster-00001.jpg,<?= $BASE_URL ?>/media/GMA Video.mp4,<?= $BASE_URL ?>/media/GMA Video.webm"
              data-autoplay="true" data-loop="true" data-wf-ignore="true"
              class="hero_video w-background-video w-background-video-atom"><video
                id="debcaaaf-bc0e-984b-d6b1-75284ec6af2a-video" autoplay="" loop="" style="background-image:url("
                https:="" assets-global.website-files.com="" 65641089d697929053e518b2="" 65644a7e246525181e98bf08_new=""
                bg="" video="" gma="" 2-poster-00001.jpg")"="" muted="" playsinline="" data-wf-ignore="true"
                data-object-fit="cover">
                <source src="<?= $BASE_URL ?>/images/657284a2a970f11001669949_new%20bg%20video%20gma%202-poster-00001.jpg"
                  data-wf-ignore="true">
                <source src="<?= $BASE_URL ?>/media/GMA Video.mp4"
                  data-wf-ignore="true">
                <source src="<?= $BASE_URL ?>/media/GMA Video.webm"
                  data-wf-ignore="true">
              </video></div>
          </div>
        </div>
      </div>
      <div data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6af2e" class="features_section">
        <div class="bg-image"><img src="<?= $BASE_URL ?>/images/657284a2a970f1100166996b_tangan%20kanan%20new2.webp" loading="lazy"
            data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6af30" sizes="(max-width: 1485px) 100vw, 1485px" alt=""
            srcset="<?= $BASE_URL ?>/images/657284a2a970f1100166996b_tangan%2520kanan%2520new-p-500.png 500w, <?= $BASE_URL ?>/images/657284a2a970f1100166996b_tangan%2520kanan%2520new-p-800.png 800w, <?= $BASE_URL ?>/images/657284a2a970f1100166996b_tangan%2520kanan%2520new-p-1080.png 1080w, <?= $BASE_URL ?>/images/657284a2a970f1100166996b_tangan%20kanan%20new2.webp 1485w"
            class="hand"><img src="<?= $BASE_URL ?>/images/657284a2a970f11001669970_tangan%20kiri%20new2.webp" loading="lazy"
            sizes="(max-width: 1485px) 100vw, 1485px"
            srcset="<?= $BASE_URL ?>/images/657284a2a970f11001669970_tangan%2520kiri%2520new-p-500.png 500w, <?= $BASE_URL ?>/images/657284a2a970f11001669970_tangan%2520kiri%2520new-p-800.png 800w, <?= $BASE_URL ?>/images/657284a2a970f11001669970_tangan%2520kiri%2520new-p-1080.png 1080w, <?= $BASE_URL ?>/images/657284a2a970f11001669970_tangan%20kiri%20new2.webp 1485w"
            alt="" class="hand_left">
          <div class="noise_gif"><br> </div>
          <div data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6af33" class="text-desc">
            <div class="w-embed">
              <style>
                .text-gradient {
                  -webkit-text-fill-color: transparent;
                  text-fill-color: transparent;
                  background-size: 500% auto;
                  animation: gradientMove 3s ease-in-out infinite alternate;
                }

                @keyframes gradientMove {
                  0% {
                    background-position: 0% 50%;
                  }

                  100% {
                    background-position: 100% 50%;
                  }
                }
              </style>
            </div>
            <div
              style="-webkit-transform:translate3d(-100px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-100px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-100px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-100px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0;"
              class="heading-style-h2 text-color-white _27ch heading-style-h3 max-width-about-heading"><?= $home->aboutHeading ?></div>
          </div>
          <div class="img_wrapper">
            <div class="padding-medium flex_center">
              <div class="img-flex">
                <div class="cards_div _1">
                  <div class="cards_image _1" style="background-image: url('<?= $home->aboutImage1->node->sourceUrl  ?>');"></div>
                </div>
                <div class="cards_div _2">
                  <div class="cards_image _2" style="background-image: url('<?= $home->aboutImage2->node->sourceUrl  ?>');"></div>
                </div>
                <div class="cards_div _3">
                  <div class="cards_image" style="background-image: url('<?= $home->aboutImage3->node->sourceUrl  ?>');"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6af48" class="numbers-section">
        <div class="bg-black">
          <div class="filler-wrapper"><img src="<?= $BASE_URL ?>/images/657284a2a970f11001669958_gma1.webp" loading="eager"
              style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
              alt="" class="image-10-copy"><img src="<?= $BASE_URL ?>/images/657284a2a970f1100166995a_gma2.webp" loading="eager"
              style="opacity:0;-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
              sizes="(max-width: 1455px) 72vw, 1048px" alt=""
              srcset="<?= $BASE_URL ?>/images/657284a2a970f1100166995a_gma2-p-500.png 500w, <?= $BASE_URL ?>/images/657284a2a970f1100166995a_gma2-p-800.png 800w, <?= $BASE_URL ?>/images/657284a2a970f1100166995a_gma2.webp 1048w"
              class="image-10"><img src="<?= $BASE_URL ?>/images/657284a2a970f1100166995e_gma3.webp" loading="eager"
              style="opacity:0;-webkit-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
              sizes="39vw" alt=""
              srcset="<?= $BASE_URL ?>/images/657284a2a970f1100166995e_gma3-p-500.png 500w, <?= $BASE_URL ?>/images/657284a2a970f1100166995e_gma3.webp 571w"
              class="image-10-copy-copy">
            <div class="numbers-float-text"><img src="<?= $BASE_URL ?>/images/657284a2a970f11001669957_Love%201.svg" loading="eager"
                style="opacity:0;-webkit-transform:translate3d(-30px, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(-30px, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(-30px, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(-30px, 60px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                alt="Love" class="image-11">
              <div letters-slide-up="" text-split="" class="transform_live_heading"><?= $home->quoteUnderAbout ?></div>
            </div>
          </div>
          <div class="grid_holder">
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6af61-860e45a1" class="numbers_item"><img
                src="<?= $home->numbersImage1->node->sourceUrl ?>" loading="lazy" alt="Family" class="number_icon">
              <div class="numbers_text_wrapper">
                <div class="numbers_count_up" id="count-member"><?= $home->numbersNumber1 ?></div>
                <div class="text-color-white numbers_desc"><?= $home->numbersText1 ?></div>
              </div>
            </div>
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6af68-860e45a1" class="numbers_item"><img
                src="<?= $home->numbersImage2->node->sourceUrl ?>" loading="lazy" alt="Church Icon" class="number_icon">
              <div class="numbers_text_wrapper">
                <div class="numbers_count_up" id="count-church"><?= $home->numbersNumber2 ?></div>
                <div class="text-color-white numbers_desc"><?= $home->numbersText2 ?></div>
              </div>
            </div>
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6af53-860e45a1" class="numbers_item"><img
                src="<?= $home->numbersImage3->node->sourceUrl ?>" loading="lazy" alt="Hands holding heart"
                class="number_icon">
              <div class="numbers_text_wrapper">
                <div class="numbers_count_up" id="count-cuba"><?= $home->numbersNumber3 ?></div>
                <div class="text-color-white numbers_desc"><?= $home->numbersText3 ?></div>
              </div>
            </div>
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6af5a-860e45a1" class="numbers_item"><img
                src="<?= $home->numbersImage4->node->sourceUrl ?>" loading="lazy" alt="Globe Icon" class="number_icon">
              <div class="numbers_text_wrapper">
                <div class="numbers_count_up" id="count-nation"><?= $home->numbersNumber4 ?></div>
                <div class="text-color-white numbers_desc"><?= $home->numbersText4 ?></div>
              </div>
            </div>
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6af6f-860e45a1" class="numbers_item bottom"><img
                src="<?= $home->numbersImage5->node->sourceUrl ?>" loading="lazy" alt="Bible Icon" class="number_icon">
              <div class="numbers_text_wrapper">
                <div class="wrapper_text_inline">
                  <div class="numbers_count_up" id="count-book"><?= $home->numbersNumber5 ?></div>
                </div>
                <div class="text-color-white numbers_desc"><?= $home->numbersText5 ?></div>
              </div>
            </div>
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6af76-860e45a1" class="numbers_item bottom"><img
                src="<?= $home->numbersImage6->node->sourceUrl ?>" loading="lazy" alt="Heart Chat Bubble Icon"
                class="number_icon">
              <div class="numbers_text_wrapper">
                <div class="numbers_count_up" id="count-impact"><?= $home->numbersNumber6 ?></div>
                <div class="text-color-white numbers_desc"><?= $home->numbersText6 ?></div>
              </div>
            </div>
          </div>
          <div words-slide-from-right="" text-split=""
            class="_60ch text-color-white text-align-center margin-top margin-xlarge"><?= $home->numbersDescriptionTop ?><br><br>‍<strong><?= $home->numbersDescriptionBottom ?></strong></div>
        </div>
      </div>
      <div class="marquee-horizontal">
        <div class="marquee-horizontal-alt-css w-embed">
          <style>
            .track-horizontal-alt {
              position: absolute;
              white-space: nowrap;
              will-change: transform;
              animation: marquee-horizontal-alt 40s linear infinite;
              /* manipulate the speed of the marquee by changing "40s" line above*/
            }

            @keyframes marquee-horizontal-alt {
              from {
                transform: translateX(0%);
              }

              to {
                transform: translateX(-50%);
              }
            }

            .track-horizontal {
              position: absolute;
              white-space: nowrap;
              will-change: transform;
              animation: marquee-horizontal 40s linear infinite;
              /* manipulate the speed of the marquee by changing "40s" line above*/
            }

            @keyframes marquee-horizontal {
              from {
                transform: translateX(-50%);
              }

              to {
                transform: translateX(0%);
              }
            }
          </style>
        </div>
        <div class="track-horizontal-alt">
          <?php for ($i=0;$i<6;$i++){?>
            <div class="marquee-text_normal"><?= $home->storiesMarqueeText ?></div>
            <div class="marquee-text_bold"><?= $home->storiesMarqueeText ?></div>
            <div class="marquee-text_italic"><?= $home->storiesMarqueeText ?></div>
          <?php } ?>
        </div>
      </div>
      <div class="stories_section">
        <div class="grid_stories_wrapper">
          <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6afad-860e45a1" class="header_wrapper">
            <h2 letters-slide-up="" text-split="" class="heading-style-h2"><?= $home->storiesHeading ?></h2>
          </div>
          <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6afa6-860e45a1"
            data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6afa6" style="opacity:0" class="image-first"><img
              src="<?= $home->storiesStoryImage1->node->sourceUrl ?>"
              loading="eager"
              sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, (max-width: 991px) 711.109375px, 48vw"
              srcset="<?= $home->storiesStoryImage1->node->sourceUrl ?>"
              alt="<?= $home->storiesStoryImageCaption1 ?>" class="sot_image">
            <div class="pict_desc_wrapper"><img src="<?= $BASE_URL ?>/images/657284a2a970f1100166993b_Polygon%203.svg" loading="lazy"
                alt="" class="image-13">
              <div><?= $home->storiesStoryImageCaption1 ?></div>
            </div>
          </div>
          <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6afb9-860e45a1"
            data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6afb9" style="opacity:0" class="image-second"><img
              src="<?= $home->storiesStoryImage2->node->sourceUrl ?>" loading="eager"
              sizes="(max-width: 479px) 100vw, (max-width: 767px) 96vw, (max-width: 991px) 711.109375px, 65vw"
              srcset="<?= $home->storiesStoryImage2->node->sourceUrl ?>"
              alt="Feeding people" class="sot_image">
            <div class="pict_desc_wrapper"><img src="<?= $BASE_URL ?>/images/657284a2a970f1100166993b_Polygon%203.svg" loading="lazy"
                alt="" class="image-13">
              <div><?= $home->storiesStoryImageCaption2 ?></div>
            </div>
          </div>
          <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6afc0-860e45a1" class="header_wrapper2 padding-medium">
            <h3 letters-slide-down="" text-split="" class="heading-4"><strong><em><?= $home->storiesStoryHeadingTop2 ?></em></strong></h3>
            <h3 letters-slide-up="" text-split="" class="heading-6"><strong><em><?= $home->storiesStoryHeadingBottom2 ?></em></strong>
            </h3>
          </div>
          <div id="w-node-e74d4123-98a9-8d26-2ab9-c55aafb91f8b-860e45a1" class="header_wrapper2 padding-medium">
            <h4 letters-slide-down="" text-split="" class="heading-4"><strong><em class="heading-4"><?= $home->storiesStoryHeadingTop1 ?></em></strong></h4>
            <h3 letters-slide-up="" text-split=""><strong><em class="heading-style-h2"><?= $home->storiesStoryHeadingBottom1 ?></em></strong></h3>
          </div>
        </div>
      </div>
      <div class="testimoni_section">
        <div class="container">
          <div class="display-inlineflex">
            <div class="stand_div"></div>
            <div letters-slide-down="" text-split="" class="heading-3 _30ch"><?= $home->storiesClosingQuote ?></div>
          </div>
          <div style="display: flex; margin-top: 40px;">
            <a data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6af1c"
                style="opacity:0" href="#" class="button link button-black-color w-inline-block">
                <div class="button_text">Read More Testimonies</div>
                <div data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6af1f"
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="button-icon w-embed"><svg width="100%" height="100%" viewBox="0 0 59 59" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M42.8186 13.3186L40.1905 15.9468L51.8853 27.6416H0V31.3585H51.8853L40.1905 43.0532L42.8186 45.6814L59 29.4999L42.8186 13.3186Z"
                      fill="currentColor"></path>
                  </svg></div>
                <div data-w-id="be659cf1-55d7-8aaa-a220-7b7aba73908d"
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="button-icon w-embed"><svg width="100%" height="100%" viewBox="0 0 59 59" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M42.8186 13.3186L40.1905 15.9468L51.8853 27.6416H0V31.3585H51.8853L40.1905 43.0532L42.8186 45.6814L59 29.4999L42.8186 13.3186Z"
                      fill="currentColor"></path>
                  </svg></div>
              </a>
          </div>
        </div>
      </div>
      <div data-w-id="c136165f-59b0-a3ca-f731-e2b052da7915" class="light_dark_section">
        <div class="cursor_stroke"></div><img src="<?= $BASE_URL ?>/images/6583c7e2386619e51b745995_Bulb.webp" loading="lazy" alt=""
          class="light_cursor">
        <div class="mask_circle">
          <div class="shadow"></div>
          <div class="mask_image">
            <div class="track-horizontal"><img src="<?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems.webp"
                loading="lazy" sizes="100vw"
                srcset="<?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems-p-500.webp 500w, <?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems-p-800.webp 800w, <?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems-p-1080.webp 1080w, <?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems-p-1600.webp 1600w, <?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems.webp 1920w"
                alt="World Condition" class="gallery_image"><img
                src="<?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems.webp" loading="lazy"
                srcset="<?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems-p-500.webp 500w, <?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems-p-800.webp 800w, <?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems-p-1080.webp 1080w, <?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems-p-1600.webp 1600w, <?= $BASE_URL ?>/images/65826ff30d607e3d2df8ac37_bg%20world%20problems.webp 1920w"
                alt="World Condition" sizes="100vw" class="gallery_image"></div>
          </div>
        </div>
        <div class="container light_container">
          <div class="text_container_light">
            <div letters-slide-up="" text-split="" class="light_text"><?= $home->lightHeadingTop ?></div>
            <div class="light_text big"><?= $home->lightHeadingBottom ?></div>
          </div>
          <div class="container_light"><img src="<?= $BASE_URL ?>/images/6572d8da10e3dc944fa50b74_light%20trimmed.webp" loading="lazy"
              style="opacity:0.5" sizes="(max-width: 479px) 263.625px, (max-width: 991px) 351.5px, 100vw" alt=""
              srcset="<?= $BASE_URL ?>/images/6572d8da10e3dc944fa50b74_light%20trimmed-p-500.webp 500w, <?= $BASE_URL ?>/images/6572d8da10e3dc944fa50b74_light%20trimmed-p-800.webp 800w, <?= $BASE_URL ?>/images/6572d8da10e3dc944fa50b74_light%20trimmed.webp 855w"
              class="light"><img src="<?= $BASE_URL ?>/images/6572d636ed83f9fc06b4f0c4_hand%202.webp" loading="lazy"
              sizes="(max-width: 479px) 277.5px, (max-width: 991px) 370px, 100vw"
              srcset="<?= $BASE_URL ?>/images/6572d636ed83f9fc06b4f0c4_hand%202-p-500.webp 500w, <?= $BASE_URL ?>/images/6572d636ed83f9fc06b4f0c4_hand%202.webp 740w"
              alt="" class="lightbulb_hand"></div>
        </div>
      </div>
      <div class="involved_section">
        <div class="w-layout-blockcontainer container-2 w-container">
          <h1 letters-slide-up="" text-split="" class="gi_heading"><?= $home->involveHeading ?></h1>
          <div class="grid_content">
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6afe0-860e45a1"
              data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6afe0" style="opacity:0" class="grid_component">
              <div class="heading-wrapper">
                <h2 letters-slide-up="" text-split="" class="heading-style-h3"><?= $home->involvePointHeading1 ?></h2>
                <div words-slide-from-right="" text-split=""><?= $home->involvePointDescription1 ?></div>
              </div>
              <div data-w-id="fd2018a7-f0d5-57cb-eb15-1e973a8768fe" class="link"><a href="<?= $home->involvePointButtonLink1 ?>" target="_blank" style="color: #000;" class="card margin-bottom margin-medium w-inline-block"><img
                    src="<?= $home->involvePointImage1->node->sourceUrl ?>" loading="eager"
                    data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a58" alt="<?= $home->involvePointHeading1 ?>" class="card-image">
                  <div data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a59" class="card-transition-block"></div>
                  <div class="card-content">
                    <div data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a5b" class="card-content-title">
                      <h1 class="display-s"><?= $home->involvePointImageText1 ?></h1>
                      <h1 class="display-s display-s-absolute"><?= $home->involvePointImageText1 ?></h1>
                    </div>
                  </div>
                  <div class="card-button-wrapper">
                    <div data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a61" class="card-button">
                      <div class="card-icon-outer-wrapper">
                        <div data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a63" class="card-icon-wrapper"><img
                            src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg" loading="eager"
                            data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a64" alt="" class="card-icon"><img
                            src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg" loading="eager" alt=""
                            class="card-icon card-icon-absolute"></div>
                      </div>
                    </div>
                  </div><img src="<?= $home->involvePointImage1->node->sourceUrl ?>" loading="lazy"
                    data-w-id="07a11ce0-9d35-e0fd-fa5b-7bd94bc08a66"
                    sizes="(max-width: 479px) 96vw, (max-width: 767px) 90vw, (max-width: 991px) 27vw, 30vw"
                    alt="<?= $home->involvePointHeading1 ?>"
                    srcset="<?= $home->involvePointImage1->node->sourceUrl ?>"
                    class="card-transition-image">
                </a>
                <a class="explore_btn" href="<?= $home->involvePointButtonLink1 ?>" target="_blank" style="color: #000;">
                  <div class="learn_text"><?= $home->involvePointButtonText1 ?></div>
                  <div class="learn_more_arrow_div">
                    <div class="card-icon-outer-wrapper">
                      <div data-w-id="233c431e-946f-d98f-308d-049ae97f1c19" class="card-icon-wrapper"><img
                          src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg" loading="eager" alt=""
                          class="learn_more_arrow"><img src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg"
                          loading="eager" alt="" class="learn_more_arrow card-icon-absolute"></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6afec-860e45a1" class="line_seperator_vertical"></div>
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6afed-860e45a1"
              data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6afed" style="opacity:0" class="grid_component">
              <div class="heading-wrapper">
                <h2 letters-slide-down="" text-split="" class="heading-style-h3"><?= $home->involvePointHeading2 ?></h2>
                <div words-slide-from-right="" text-split=""><?= $home->involvePointDescription2 ?></div>
              </div>
              <div data-w-id="b1f12118-ca07-b299-71ca-bae7cdec275b" class="link"><a href="<?= $home->involvePointButtonLink2 ?>" target="_blank" style="color: #000;" class="card margin-bottom margin-medium w-inline-block"><img
                    src="<?= $home->involvePointImage2->node->sourceUrl ?>" loading="eager"
                    data-w-id="b1f12118-ca07-b299-71ca-bae7cdec275d" alt="<?= $home->involvePointHeading2 ?>" class="card-image">
                  <div data-w-id="b1f12118-ca07-b299-71ca-bae7cdec275e" class="card-transition-block"></div>
                  <div class="card-content">
                    <div data-w-id="b1f12118-ca07-b299-71ca-bae7cdec2760" class="card-content-title">
                      <h1 class="display-s"><?= $home->involvePointImageText2 ?></h1>
                      <h1 class="display-s display-s-absolute"><?= $home->involvePointImageText2 ?></h1>
                    </div>
                  </div>
                  <div class="card-button-wrapper">
                    <div data-w-id="b1f12118-ca07-b299-71ca-bae7cdec2766" class="card-button">
                      <div class="card-icon-outer-wrapper">
                        <div data-w-id="b1f12118-ca07-b299-71ca-bae7cdec2768" class="card-icon-wrapper"><img
                            src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg" loading="eager"
                            data-w-id="b1f12118-ca07-b299-71ca-bae7cdec2769" alt="" class="card-icon"><img
                            src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg" loading="eager" alt=""
                            class="card-icon card-icon-absolute"></div>
                      </div>
                    </div>
                  </div><img src="<?= $home->involvePointImage2->node->sourceUrl ?>" loading="eager"
                    data-w-id="b1f12118-ca07-b299-71ca-bae7cdec276b"
                    sizes="(max-width: 479px) 96vw, (max-width: 767px) 90vw, (max-width: 991px) 27vw, 30vw" alt="<?= $home->involvePointHeading2 ?>"
                    srcset="<?= $home->involvePointImage2->node->sourceUrl ?>"
                    class="card-transition-image">
                </a>
                <a class="explore_btn" href="<?= $home->involvePointButtonLink2 ?>" target="_blank" style="color: #000;">
                  <div class="learn_text"><?= $home->involvePointButtonText2 ?></div>
                  <div class="learn_more_arrow_div">
                    <div class="card-icon-outer-wrapper">
                      <div data-w-id="b1f12118-ca07-b299-71ca-bae7cdec2771" class="card-icon-wrapper"><img
                          src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg" loading="eager" alt=""
                          class="learn_more_arrow"><img src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg"
                          loading="eager" alt="" class="learn_more_arrow card-icon-absolute"></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6aff9-860e45a1" class="line_seperator_vertical"></div>
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6affa-860e45a1"
              data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6affa" style="opacity:0" class="grid_component right-side">
              <div class="heading-wrapper">
                <h2 letters-slide-down="" text-split="" class="heading-style-h3"><?= $home->involvePointHeading3 ?></h2>
                <div words-slide-from-right="" text-split=""><?= $home->involvePointDescription3 ?></div>
              </div>
              <div data-w-id="0333404f-fea2-f83d-6dd0-710846452981" class="link"><a href="<?= $home->involvePointButtonLink3 ?>" target="_blank" style="color: #000;" class="card margin-bottom margin-medium w-inline-block"><img
                    src="<?= $home->involvePointImage3->node->sourceUrl ?>" loading="eager"
                    data-w-id="0333404f-fea2-f83d-6dd0-710846452983" alt="<?= $home->involvePointHeading3 ?>" class="card-image">
                  <div data-w-id="0333404f-fea2-f83d-6dd0-710846452984" class="card-transition-block"></div>
                  <div class="card-content">
                    <div data-w-id="0333404f-fea2-f83d-6dd0-710846452986" class="card-content-title">
                      <h1 class="display-s"><?= $home->involvePointImageText3 ?></h1>
                      <h1 class="display-s display-s-absolute"><?= $home->involvePointImageText3 ?></h1>
                    </div>
                  </div>
                  <div class="card-button-wrapper">
                    <div data-w-id="0333404f-fea2-f83d-6dd0-71084645298c" class="card-button">
                      <div class="card-icon-outer-wrapper">
                        <div data-w-id="0333404f-fea2-f83d-6dd0-71084645298e" class="card-icon-wrapper"><img
                            src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg" loading="eager"
                            data-w-id="0333404f-fea2-f83d-6dd0-71084645298f" alt="" class="card-icon"><img
                            src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg" loading="eager" alt=""
                            class="card-icon card-icon-absolute"></div>
                      </div>
                    </div>
                  </div><img src="<?= $home->involvePointImage3->node->sourceUrl ?>" loading="lazy"
                    data-w-id="0333404f-fea2-f83d-6dd0-710846452991"
                    sizes="(max-width: 479px) 96vw, (max-width: 767px) 90vw, (max-width: 991px) 27vw, 30vw"
                    alt="<?= $home->involvePointHeading3 ?>"
                    srcset="<?= $home->involvePointImage3->node->sourceUrl ?>"
                    class="card-transition-image">
                </a>
                <a class="explore_btn" href="<?= $home->involvePointButtonLink3 ?>" target="_blank" style="color: #000;">
                  <div class="learn_text"><?= $home->involvePointButtonText3 ?></div>
                  <div class="learn_more_arrow_div">
                    <div class="card-icon-outer-wrapper">
                      <div data-w-id="0333404f-fea2-f83d-6dd0-710846452997" class="card-icon-wrapper"><img
                          src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg" loading="eager" alt=""
                          class="learn_more_arrow"><img src="<?= $BASE_URL ?>/images/6584323571553a14bb1c2cce_icon__arrow--black.svg"
                          loading="eager" alt="" class="learn_more_arrow card-icon-absolute"></div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-section margin-top">
        <div data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6b006" class="bg_black_footer">
          <div class="w-layout-blockcontainer container_footer w-container">
            <div class="grid_wrapper">
              <h1 letters-slide-down="" text-split="" class="heading-style-h1 text-color-white"><?= $home->footerHeading ?></h1>
              <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6b00b-860e45a1" class="heading_img_wrapper"><img
                  src="<?= $home->footerPeopleImage1->node->sourceUrl ?>" loading="eager" width="120" height="120"
                  alt="Grandmother" id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6b00c-860e45a1" class="img-footer"><img
                  src="<?= $home->footerPeopleImage2->node->sourceUrl ?>" loading="eager" alt="old man" height="120"
                  class="img-footer down"><img src="<?= $home->footerPeopleImage3->node->sourceUrl ?>"
                  loading="eager" width="120" height="120" alt="Person" class="img-footer up"><img
                  src="<?= $home->footerPeopleImage4->node->sourceUrl ?>" loading="eager" width="120" height="120"
                  alt="Man" class="img-footer down"><img src="<?= $home->footerPeopleImage5->node->sourceUrl ?>"
                  loading="eager" width="120" height="120" alt="Boy" class="img-footer up"></div>
            </div>
            <div words-slide-from-right="" text-split="" class="text_desc_footer"><?= $home->footerContactText ?></div>
            <div class="form_field-wrapper spacer-medium">
              <div class="form-block w-form">
                <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form"
                  data-wf-page-id="6572847c4972bd12860e45a1" data-wf-element-id="c76c426c-75da-12a4-934f-d026fe643198">
                  <input class="text-field linksmall w-input" maxlength="256" name="First-Name" data-name="First Name"
                    placeholder="FIRST NAME" type="text" id="First-Name"><input class="text-field linksmall w-input"
                    maxlength="256" name="LAST-NAME" data-name="LAST NAME" placeholder="LAST NAME" type="text"
                    id="LAST-NAME" required=""><input class="text-field linksmall w-input" maxlength="256" name="Email"
                    data-name="Email" placeholder="EMAIL" type="email" id="Email-3" required=""><input type="submit"
                    data-wait="Please wait..." class="form_button link w-button" value="SUBSCRIBE"></form>
                <div class="success-message w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="error-message w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
          </div>
          <a href="<?= $home->footerMarqueeLink ?>" target="_blank" class="marquee-horizontal_footer">
            <div class="track-horizontal-alt">
              <?php for ($i=0;$i<4;$i++){?>
                <div class="marquee-text_italic_footer"><?= $home->footerMarqueeText ?></div>
                <div class="marquee-text_bold_footer"><?= $home->footerMarqueeText ?></div>
              <?php } ?>
            </div>
          </a><a data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6b03d" style="opacity:0" href="<?= $home->footerButtonLink ?>"
            class="button margin-top margin-large link w-inline-block">
            <div data-w-id="debcaaaf-bc0e-984b-d6b1-75284ec6b03e"
              style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
              class="button-icon w-embed"><svg width="100%" height="100%" viewBox="0 0 59 59" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M42.8186 13.3186L40.1905 15.9468L51.8853 27.6416H0V31.3585H51.8853L40.1905 43.0532L42.8186 45.6814L59 29.4999L42.8186 13.3186Z"
                  fill="currentColor"></path>
              </svg></div>
            <div class="button_text"><?= $home->footerButtonText ?></div>
          </a>
          <div class="grid_footer_wrapper"><img src="<?= $home->footerBottomImage->node->sourceUrl ?>"
              loading="eager" id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6b042-860e45a1" alt="GMA Scenes"
              class="footer_gif">
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6b043-860e45a1" class="nav_wrapper"><a href="<?= $footer->footerLink1 ?>"
                class="nav-link-3 linksmall w-inline-block">
                <div class="button-text-wrapper-2">
                  <div class="button-text-2"><?= $footer->footerText1 ?></div>
                  <div class="button-text-2 active"><?= $footer->footerText1 ?></div>
                </div>
              </a><a href="<?= $footer->footerLink2 ?>" class="nav-link-3 linksmall w-inline-block">
                <div class="button-text-wrapper-2">
                  <div class="button-text-2"><?= $footer->footerText2 ?></div>
                  <div class="button-text-2 active"><?= $footer->footerText2 ?></div>
                </div>
              </a><a href="<?= $footer->footerLink3 ?>" class="nav-link-3 linksmall w-inline-block">
                <div class="button-text-wrapper-2">
                  <div class="button-text-2"><?= $footer->footerText3 ?></div>
                  <div class="button-text-2 active"><?= $footer->footerText3 ?></div>
                </div>
              </a><a href="<?= $footer->footerLink4 ?>" class="nav-link-3 linksmall w-inline-block">
                <div class="button-text-wrapper-2">
                  <div class="button-text-2"><?= $footer->footerText4 ?></div>
                  <div class="button-text-2 active"><?= $footer->footerText4 ?></div>
                </div>
              </a><a href="<?= $footer->footerLink5 ?>" class="nav-link-3 linksmall w-inline-block">
                <div class="button-text-wrapper-2">
                  <div class="button-text-2"><?= $footer->footerText5 ?></div>
                  <div class="button-text-2 active"><?= $footer->footerText5 ?></div>
                </div>
              </a></div>
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6b04e-860e45a1" class="nav_wrapper"><a href="<?= $footer->footerLink6 ?>"
                class="nav-link-3 linksmall w-inline-block">
                <div class="button-text-wrapper-2">
                  <div class="button-text-2"><?= $footer->footerText6 ?></div>
                  <div class="button-text-2 active"><?= $footer->footerText6 ?></div>
                </div>
              </a><a href="<?= $footer->footerLink7 ?>" class="nav-link-3 linksmall w-inline-block">
                <div class="button-text-wrapper-2">
                  <div class="button-text-2"><?= $footer->footerText7 ?></div>
                  <div class="button-text-2 active"><?= $footer->footerText7 ?></div>
                </div>
              </a><a href="<?= $footer->footerLink8 ?>" class="nav-link-3 linksmall w-inline-block">
                <div class="button-text-wrapper-2">
                  <div class="button-text-2"><?= $footer->footerText8 ?></div>
                  <div class="button-text-2 active"><?= $footer->footerText8 ?></div>
                </div>
              </a><a href="<?= $footer->footerLink9 ?>" class="nav-link-3 linksmall w-inline-block">
                <div class="button-text-wrapper-2">
                  <div class="button-text-2"><?= $footer->footerText9 ?></div>
                  <div class="button-text-2 active"><?= $footer->footerText9 ?></div>
                </div>
              </a><a href="<?= $footer->footerLink10 ?>" class="nav-link-3 linksmall w-inline-block">
                <div class="button-text-wrapper-2">
                  <div class="button-text-2"><?= $footer->footerText10 ?></div>
                  <div class="button-text-2 active"><?= $footer->footerText10 ?></div>
                </div>
              </a></div>
            <div id="w-node-debcaaaf-bc0e-984b-d6b1-75284ec6b059-860e45a1" class="contact_wrapper">
              <div class="flex_box">
                <div class="text-color-white heading-style-h4 footer_text">FOLLOW US</div>
                <div class="flex_logo_footer"><a href="<?= $contact->facebookLink ?>" target="_blank" class="linksmall w-inline-block"><img
                      src="<?= $BASE_URL ?>/images/657284a2a970f11001669939_FB.svg" loading="lazy" alt="Facebook"
                      class="social_icon"></a><a href="<?= $contact->instagramLink ?>" target="_blank" class="linksmall w-inline-block"><img
                      src="<?= $BASE_URL ?>/images/65844e942065cd7b41a89c2b_Instagram%20SVG.svg" loading="lazy" alt="Instagram"
                      class="social_icon"></a><a href="<?= $contact->youtubeLink ?>" target="_blank" class="linksmall w-inline-block"><img
                      src="<?= $BASE_URL ?>/images/65844e84c10900ecd482fcc5_Youtube%20SVG.svg" loading="lazy" alt="Youtube"
                      class="social_icon"></a><a href="<?= $contact->xLink ?>" target="_blank" class="linksmall w-inline-block"><img
                      src="<?= $BASE_URL ?>/images/65844e83fc7fac39e4d4787e_X%20SVG.svg" loading="lazy" alt="X" class="social_icon"></a>
                </div>
                <div class="text-color-white footer_text"><?= $contact->address ?></div>
              </div>
            </div>
          </div>
          <div class="footer_footnote">
            <h4 class="heading-style-h4 text-color-white text-align-center"><i>“Love the Lost, Transform Nations”</i></h4>
            <img
              src="<?= $BASE_URL ?>/images/657284a2a970f1100166992e_Screenshot%202023-10-23%20135052%201.svg" loading="lazy"
              alt="GMA White Logo" class="footer_logo">
            <div class="text-color-white text-align-center">©Global Mission Awareness - All Rights Reserved</div>
          </div>
        </div>
      </div>
      <div class="spacer-small"></div>
      <div class="sidebar">
        <div class="sidebar-top">
          <div style="width:0px;background-color:rgb(208,50,39)" class="sidebar-menu">
            <div
              style="-webkit-transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0vw, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
              class="menu-link">
              <div class="menu-link-mouseover">
                <div data-w-id="d9793624-df17-36b4-ffb3-261b09a4a9c0"
                  style="-webkit-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0, 0, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                  class="close-menu-link">
                  <div
                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);background-color:rgb(255,255,245)"
                    class="menu-link-background">
                    <div class="menu-line-wrapper">
                      <div class="menu-line top"></div>
                      <div class="menu-line bottom"></div>
                    </div>
                  </div>
                </div>
                <div class="open-menu-link-wrapper">
                  <div data-w-id="d9793624-df17-36b4-ffb3-261b09a4a9c6"
                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                    class="open-menu-link">
                    <div
                      style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);background-color:rgb(255,255,245)"
                      class="menu-link-background">
                      <div class="menu-line-wrapper">
                        <div class="menu-line top"></div>
                        <div class="menu-line"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              style="display:flex;-webkit-transform:translate3d(50%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(50%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(50%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(50%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
              class="sidebar-menu-content">
              <div id="w-node-d9793624-df17-36b4-ffb3-261b09a4a9cc-860e45a1" class="sidebar-menu-block">
                <div class="title-wrapper">
                  <div class="nav-menu-list language"><img src="<?= $BASE_URL ?>/images/657284a2a970f1100166993a_Group%204.svg"
                      loading="lazy" alt="GMA LOGO
"></div>
                </div>
                <div class="sidebar-menu-list"><a href="<?= $nav->navigationLink1 ?>" class="sidebar-menu-item w-inline-block">
                    <div class="dot-wrapper nav-dot">
                      <div class="form-number">01</div>
                      <div class="dot-mouseover">
                        <div class="dot"></div>
                      </div>
                    </div>
                    <div class="sidebar-link-text"><?= $nav->navigationText1 ?></div>
                    <div class="menu-link-arrow"><img
                        src="<?= $BASE_URL ?>/images/656a4bc4624aafee56e2e543_arrow-right---filled%2824x24%29%25402x.svg" loading="lazy"
                        alt=""></div>
                  </a><a href="<?= $nav->navigationLink2 ?>" class="sidebar-menu-item w-inline-block">
                    <div class="dot-wrapper nav-dot">
                      <div class="form-number">02</div>
                      <div class="dot-mouseover">
                        <div class="dot"></div>
                      </div>
                    </div>
                    <div class="sidebar-link-text"><?= $nav->navigationText2 ?></div>
                    <div class="menu-link-arrow"><img
                        src="<?= $BASE_URL ?>/images/656a4bc4624aafee56e2e543_arrow-right---filled%2824x24%29%25402x.svg" loading="lazy"
                        alt="arrow"></div>
                  </a><a href="<?= $nav->navigationLink3 ?>" class="sidebar-menu-item w-inline-block">
                    <div class="dot-wrapper nav-dot">
                      <div class="dot-mouseover">
                        <div class="dot"></div>
                      </div>
                      <div class="form-number">03</div>
                    </div>
                    <div class="sidebar-link-text"><?= $nav->navigationText3 ?></div>
                    <div class="menu-link-arrow"><img
                        src="<?= $BASE_URL ?>/images/656a4bc4624aafee56e2e543_arrow-right---filled%2824x24%29%25402x.svg" loading="lazy"
                        alt="arrow"></div>
                  </a><a href="<?= $nav->navigationLink4 ?>" class="sidebar-menu-item w-inline-block">
                    <div class="dot-wrapper nav-dot">
                      <div class="form-number">04</div>
                      <div class="dot-mouseover">
                        <div class="dot"></div>
                      </div>
                    </div>
                    <div class="menu-link-arrow"><img
                        src="<?= $BASE_URL ?>/images/656a4bc4624aafee56e2e543_arrow-right---filled%2824x24%29%25402x.svg" loading="lazy"
                        alt="arrow" class="menu-link-icon"></div>
                    <div class="sidebar-link-text"><?= $nav->navigationText4 ?></div>
                  </a><div style="cursor: pointer;" id="sidebar-menu-expand" class="sidebar-menu-item-no-action w-inline-block">
                    <div class="dot-wrapper nav-dot">
                      <div class="form-number">05</div>
                      <div class="dot-mouseover">
                        <div class="dot"></div>
                      </div>
                    </div>
                    <div class="menu-link-arrow"><img
                        src="<?= $BASE_URL ?>/images/656a4bc4624aafee56e2e543_arrow-right---filled%2824x24%29%25402x.svg" loading="lazy"
                        alt="arrow" class="menu-link-icon"></div>
                    <div class="sidebar-link-text"><?= $nav->navigationText5 ?></div>
                  </div>
                  <div class="sidebar-menu-item-no-action" id="sidebar-menu-ext" style="display: none;">
                    <div class="dot-wrapper nav-dot">
                      <div class="form-number"></div>
                      <div class="dot-mouseover">
                        <div class="dot"></div>
                      </div>
                    </div>
                    <div class="menu-link-arrow"><img
                        src="<?= $BASE_URL ?>/images/656a4bc4624aafee56e2e543_arrow-right---filled%2824x24%29%25402x.svg" loading="lazy"
                        alt="arrow" class="menu-link-icon"></div>
                    <div class="sidebar-floating-menu">
                      <a href="https://google.com/" target="_blank" class="nav-link-3 nav linksmall w-inline-block">
                        <div class="button-text-wrapper-2" style="white-space: nowrap;">
                          <div class="button-text-2" style="color: black;">Blogs</div>
                          <div class="button-text-2 active">Blogs</div>
                        </div>
                      </a>
                      <a href="https://open.spotify.com/show/4qv5I5EuJHDLJwbLwkmvFp?si=1ab0efec01c34e0d" target="_blank" class="nav-link-3 nav linksmall w-inline-block">
                        <div class="button-text-wrapper-2" style="white-space: nowrap;">
                          <div class="button-text-2" style="color: black;">Podcast on Spotify</div>
                          <div class="button-text-2 active">Podcast on Spotify</div>
                        </div>
                      </a>
                      <a href="https://podcasts.apple.com/us/podcast/kingdom-family-talks-with-leif-hetland/id1146945661" target="_blank" class="nav-link-3 nav linksmall w-inline-block">
                        <div class="button-text-wrapper-2" style="white-space: nowrap;">
                          <div class="button-text-2" style="color: black;">Podcast on Apple Podcast</div>
                          <div class="button-text-2 active">Podcast on Apple Podcast</div>
                        </div>
                      </a>
                      <a href="https://shop.globalmissionawareness.com/" target="_blank" class="nav-link-3 nav linksmall w-inline-block">
                        <div class="button-text-wrapper-2" style="white-space: nowrap;">
                          <div class="button-text-2" style="color: black;">Store</div>
                          <div class="button-text-2 active">Store</div>
                        </div>
                      </a>
                    </div>
                  </div>
                  <a href="<?= $nav->navigationLink6 ?>" class="sidebar-menu-item w-inline-block">
                    <div class="dot-wrapper nav-dot">
                      <div class="form-number">06</div>
                      <div class="dot-mouseover">
                        <div class="dot"></div>
                      </div>
                    </div>
                    <div class="menu-link-arrow"><img
                        src="<?= $BASE_URL ?>/images/656a4bc4624aafee56e2e543_arrow-right---filled%2824x24%29%25402x.svg" loading="lazy"
                        alt="arrow" class="menu-link-icon"></div>
                    <div class="sidebar-link-text"><?= $nav->navigationText6 ?></div>
                  </a></div>
              </div>
              <div id="w-node-d9793624-df17-36b4-ffb3-261b09a4aa1a-860e45a1" class="mega-menu-social">
                <div class="d-13-icons-wrapper menu"><a href="<?= $contact->facebookLink ?>" target="_blank"
                    class="d-13-icon-wrapper w-inline-block">
                    <div class="d-13-icon-bg"><img src="<?= $BASE_URL ?>/images/657284a2a970f11001669939_FB.svg"
                        loading="lazy" alt="Facebook" class="social_icon"></div>
                    <div class="d-13-border"></div>
                  </a><a href="<?= $contact->instagramLink ?>" target="_blank" class="d-13-icon-wrapper w-inline-block">
                    <div class="d-13-icon-bg"><img src="<?= $BASE_URL ?>/images/65844e942065cd7b41a89c2b_Instagram%20SVG.svg"
                        loading="lazy" alt="Instagram" class="social_icon"></div>
                    <div class="d-13-border"></div>
                  </a><a href="<?= $contact->youtubeLink ?>" target="_blank" class="d-13-icon-wrapper w-inline-block">
                    <div class="d-13-icon-bg"><img src="<?= $BASE_URL ?>/images/65844e84c10900ecd482fcc5_Youtube%20SVG.svg" loading="lazy"
                        alt="Youtube" class="social_icon"></div>
                    <div class="d-13-border"></div>
                  </a><a href="<?= $contact->xLink ?>" target="_blank" class="d-13-icon-wrapper w-inline-block">
                    <div class="d-13-icon-bg"><img src="<?= $BASE_URL ?>/images/65844e83fc7fac39e4d4787e_X%20SVG.svg" loading="lazy"
                        alt="X" class="social_icon"></div>
                    <div class="d-13-border"></div>
                  </a></div>
              </div>
            </div>
          </div>
          <div data-w-id="d9793624-df17-36b4-ffb3-261b09a4aa30" style="display:none;opacity:0"
            class="mega-menu-overlay"></div>
        </div>
        <div style="opacity:1" class="sidebar-bottom">
          <div href="#" class="sidebar-link">
            <div class="sidebar-link-wrapper">
              <div data-w-id="d9793624-df17-36b4-ffb3-261b09a4aa34" class="menu-link-base">
                <div class="sidebar-link-background">
                  <div class="icon-2 w-embed"><svg width="420" height="420" viewBox="0 0 24 24" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path
                        d="M14.5899 16.0039L5.98193 7.39691L7.39593 5.98291L16.0029 14.5889V7.00391H18.0029V18.0039H7.00293V16.0039H14.5899Z"
                        fill="currentColor"></path>
                    </svg>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><a data-w-id="8a19f315-1507-bd01-2225-0ef767095132" href="<?= $home->stickyButtonLink ?>" class="hero_badge link w-inline-block">
        <div class="hero_badge_arrow_wrapper">
          <div class="hero_badge_arrow"><img src="<?= $BASE_URL ?>/images/657284a2a970f1100166992d_%F0%9F%A6%86%20icon%20_like_.svg"
              loading="lazy" alt="Heart" class="hero_badge_arrow_content"></div>
        </div>
        <div class="donate_text"><?= $home->stickyButtonText ?></div>
      </a>
    </div>
  </div>
  <script src="<?= $BASE_URL ?>/js/jquery-3.5.1.min.dc5e7f18c8.js" type="text/javascript" crossorigin="anonymous"></script>
  <script src="<?= $BASE_URL ?>/js/script-main.js"></script>
  <script src="https://unpkg.com/split-type"></script>
  <script src="<?= $BASE_URL ?>/js/gsap.min.js"></script>
  <script src="<?= $BASE_URL ?>/js/ScrollTrigger.min.js"></script>
  <script src="<?= $BASE_URL ?>/js/script.js" type="text/javascript"></script>
  <script src="<?= $BASE_URL ?>/js/lenis.min.js"></script>
  <script>
    window.addEventListener("DOMContentLoaded", (event) => {
      // Split text into spans
      let typeSplit = new SplitType("[text-split]", {
        types: "words, chars",
        tagName: "span"
      });

      // Link timelines to scroll position
      function createScrollTrigger(triggerElement, timeline) {
        // Reset tl when scroll out of view past bottom of screen
        ScrollTrigger.create({
          trigger: triggerElement,
          start: "top bottom",
          onLeaveBack: () => {
            timeline.progress(0);
            timeline.pause();
          }
        });
        // Play tl when scrolled into view (60% from top of screen)
        ScrollTrigger.create({
          trigger: triggerElement,
          start: "top 60%",
          onEnter: () => timeline.play()
        });
      }

      $("[words-slide-up]").each(function (index) {
        let tl = gsap.timeline({ paused: true });
        tl.from($(this).find(".word"), { opacity: 0, yPercent: 100, duration: 0.5, ease: "back.out(2)", stagger: { amount: 0.5 } });
        createScrollTrigger($(this), tl);
      });

      $("[words-rotate-in]").each(function (index) {
        let tl = gsap.timeline({ paused: true });
        tl.set($(this).find(".word"), { transformPerspective: 1000 });
        tl.from($(this).find(".word"), { rotationX: -90, duration: 0.6, ease: "power2.out", stagger: { amount: 0.6 } });
        createScrollTrigger($(this), tl);
      });

      $("[words-slide-from-right]").each(function (index) {
        let tl = gsap.timeline({ paused: true });
        tl.from($(this).find(".word"), { opacity: 0, x: "1em", duration: 0.6, ease: "power2.out", stagger: { amount: 0.2 } });
        createScrollTrigger($(this), tl);
      });

      $("[letters-slide-up]").each(function (index) {
        let tl = gsap.timeline({ paused: true });
        tl.from($(this).find(".char"), { yPercent: 100, duration: 0.2, ease: "power1.out", stagger: { amount: 0.6 } });
        createScrollTrigger($(this), tl);
      });

      $("[letters-slide-down]").each(function (index) {
        let tl = gsap.timeline({ paused: true });
        tl.from($(this).find(".char"), { yPercent: -120, duration: 0.3, ease: "power1.out", stagger: { amount: 0.7 } });
        createScrollTrigger($(this), tl);
      });

      $("[letters-fade-in]").each(function (index) {
        let tl = gsap.timeline({ paused: true });
        tl.from($(this).find(".char"), { opacity: 0, duration: 0.2, ease: "power1.out", stagger: { amount: 0.8 } });
        createScrollTrigger($(this), tl);
      });

      $("[letters-fade-in-random]").each(function (index) {
        let tl = gsap.timeline({ paused: true });
        tl.from($(this).find(".char"), { opacity: 0, duration: 0.05, ease: "power1.out", stagger: { amount: 0.4, from: "random" } });
        createScrollTrigger($(this), tl);
      });

      $("[scrub-each-word]").each(function (index) {
        let tl = gsap.timeline({
          scrollTrigger: {
            trigger: $(this),
            start: "top 90%",
            end: "top center",
            scrub: true
          }
        });
        tl.from($(this).find(".word"), { opacity: 0.2, duration: 0.2, ease: "power1.out", stagger: { each: 0.4 } });
      });

      // Avoid flash of unstyled content
      gsap.set("[text-split]", { opacity: 1 });
    });

    // LENIS SMOOTH SCROLL
    let lenis;
    if (Lainweb.env("editor") === undefined) {
      lenis = new Lenis({
        lerp: 0.1,
        wheelMultiplier: 0.7,
        gestureOrientation: "vertical",
        normalizeWheel: false,
        smoothTouch: false
      });
      function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
      }
      requestAnimationFrame(raf);
    }
    $("[data-lenis-start]").on("click", function () {
      lenis.start();
    });
    $("[data-lenis-stop]").on("click", function () {
      lenis.stop();
    });
    $("[data-lenis-toggle]").on("click", function () {
      $(this).toggleClass("stop-scroll");
      if ($(this).hasClass("stop-scroll")) {
        lenis.stop();
      } else {
        lenis.start();
      }
    });


    $(document).on('click', function(event) {
        var target = $(event.target);

        if (event.target.id === 'menu-float-button' || event.target.closest('#menu-float-button')){
          $(".floating-menu").slideToggle();
        }
        else {
          if ($(".floating-menu").css("display") != "none"){
            $(".floating-menu").slideToggle();
          }
        }
    });

    $("#sidebar-menu-expand").on('click', function(e){
      e.preventDefault();
      $("#sidebar-menu-ext").slideToggle();
    });
  </script>
  <script src="<?= $BASE_URL ?>/js/countUp.umd.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    const memberSub = {
        enableScrollSpy: true,
        duration: 6,
    };
    const numAnimMember = new countUp.CountUp("count-member", <?= $home->numbersNumber1 ?>, memberSub);

    const cubaSub = {
        enableScrollSpy: true,
        duration: 4,
    };
    const numAnimCuba = new countUp.CountUp("count-cuba", <?= $home->numbersNumber3 ?>, cubaSub);

    const bookSub = {
        enableScrollSpy: true,
        duration: 3,
    };
    const numAnimBook = new countUp.CountUp("count-book", <?= $home->numbersNumber5 ?>, bookSub);

    const churchSub = {
        enableScrollSpy: true,
        duration: 5,
    };
    const numAnimChurch = new countUp.CountUp("count-church", <?= $home->numbersNumber2 ?>, churchSub);

    const nationSub = {
        enableScrollSpy: true,
        duration: 5,
    };
    const numAnimNation = new countUp.CountUp("count-nation", <?= $home->numbersNumber4 ?>, nationSub);

    const impactSub = {
        enableScrollSpy: true,
        duration: 4,
    };
    const numAnimImpact = new countUp.CountUp("count-impact", <?= $home->numbersNumber6 ?>, impactSub);
  </script>
</body>

</html>
