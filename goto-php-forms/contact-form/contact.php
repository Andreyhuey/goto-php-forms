<!DOCTYPE html>
<html>
    <head>
        <title>contact-form</title>
    </head>
    <body>
        <form
              id="contact-form"
              name="contact-form"
              action="mail.php"
              method="POST"
            >
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="name"
                      name="name"
                      class="form-control"
                    />
                    <label for="name" class="">Your name</label>
                  </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="email"
                      name="email"
                      class="form-control"
                    />
                    <label for="email" class="">Your email</label>
                  </div>
                </div>
                <!--Grid column-->
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input
                      type="text"
                      id="subject"
                      name="subject"
                      class="form-control"
                    />
                    <label for="subject" class="">Subject</label>
                  </div>
                </div>
              </div>
              <!--Grid row-->

              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col-md-12">
                  <div class="md-form">
                    <textarea
                      type="text"
                      id="message"
                      name="message"
                      rows="2"
                      class="form-control md-textarea"
                    ></textarea>
                    <label for="message">Your message</label>
                  </div>
                </div>
              </div>
              <button id="submit" type="submit" name="submit">Submit</button>
            </form>

            
    </body>
</html>