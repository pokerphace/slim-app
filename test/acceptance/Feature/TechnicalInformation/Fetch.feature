Feature: Application Technical Information

  Scenario: Access application technical information with a valid token
    Given the application technical information feature is enabled
    And I have a valid token
    When I try to see the application technical information
    Then I can see the Project name
    And I can see the Project description
    And I can see the Project version
    And I can see the PHP version
    And I can see the Slim version
    And I can see the Server IP
